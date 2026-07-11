<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function index(){
        $training_centers=Training_center::all();

        return view('training_center.index', compact('training_centers'));
    }


    public function create(){
        return view('training_center.create');
    }
    

    public function store(Request $request)
    {
        $training_center = Training_center::create($request->all());
        
        return $training_center;
    }


    public function show ($id){

        $training_center = Training_center::find($id);
         
        return view('training_center.show',compact('training_center'));
    }

    // El método que te pedía el error en pantalla para abrir el formulario
    public function edit($id){
        $training_center = Training_center::find($id);

        return view('training_center.edit', compact('training_center'));
    }

    // El método que necesitas para procesar los cambios en la base de datos
    public function update(Request $request, $id){
        $training_center = Training_center::find($id);
        $training_center->update($request->all());

        // Redirige al index de centros una vez guardado
        return redirect()->route('training_center.index');
    }
}