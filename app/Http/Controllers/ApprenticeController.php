<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;

class ApprenticeController extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('search');

        $apprentices = Apprentice::when($query, function ($q) use ($query) {
            return $q->where('name', 'LIKE', "%{$query}%");
        })->get();

        //return view('apprentice.index', compact('apprentices'));
        return response()->json($apprentices);
    }

    public function create()
    {

        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.create', compact('courses', 'computers'));
    }



    public function store(Request $request)
    {

        $apprentice = Apprentice::create($request->all());

        //return $apprentice;
        return response()->json($apprentice);
    }



    public function show(Apprentice $apprentice)
    {

        //$apprentice=Apprentice::find($id);

        //return view('apprentice.show', compact('apprentice'));
        return response()->json($apprentice);
    }



    public function edit(Apprentice $apprentice)
    {

        //Encuentro el Aprendriz
        //return view('apprentice.edit', compact('apprentice'));
        return response()->json($apprentice);
    }



    public function update(Request $request, Apprentice $apprentice)
    {

        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->save();

        //return redirect()->route('apprentice.index');
        return response()->json($apprentice);
    }


    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Apprentice $apprentice)
    {

        $apprentice->delete();

       // return redirect()->route('apprentice.index');
       return response()->json($apprentice);
    }

 }
