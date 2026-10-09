<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function index(){
        
        $computers = Computer::all();
        return response()->json($computers);
       // return view('computer.index', compact('computers'));
    }



    public function create(){

        return view('computer.create');
    }



   public function store(Request $request)
{
    // 1. Guarda en la BD todos los datos enviados (number, brand, etc.) excepto urlFoto
    $computer = Computer::create($request->all());

    // 2. Comprueba si se envió un archivo en el input con name="urlFoto"
    if ($request->hasFile('urlFoto')) {
        $file = $request->file('urlFoto');

        // Genera un nombre único usando la fecha/hora en segundos (ejemplo: foto_1715000000.png)
        $nombreArchivo = "foto_" . time() . "." . $file->guessExtension();

        // Mueve la foto a la carpeta: storage/app/public/images
        $file->storeAs('public/images', $nombreArchivo);

        // Asigna el nombre de la foto al atributo del modelo y guarda los cambios
        $computer->urlFoto = $nombreArchivo;
        $computer->save();
    }

    // 3. Redirige a la tabla de computadores
    //return redirect()->route('computer.index');
     return response()->json($computer);
}



    public function show(Computer $computer){

        //$computer = Computer::find($id);

        //return view('computer.show', compact('computer'));
         return response()->json($computer);
    }



    public function edit(Computer $computer){

        //Encuentro el Computador
        //return view('computer.edit', compact('computer'));
        return response()->json($computer);
    }



    public function update(Request $request, Computer $computer){

        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        //return redirect()->route('computer.index');
        return response()->json($computer);
    }



    public function destroy(Computer $computer){

        $computer->delete();

        //return redirect()->route('computer.index');
        return response()->json($computer);
    }
 }