<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    public function index()
    {
        // Carga los instructores trayendo su área y centro de formación
        $teachers = Teacher::with(['area', 'training_center'])->get();

       // return view('teacher.index', compact('teachers'));
       return response()->json($teachers);
    }

    public function create()
    {

        $training_centers = Training_center::all();
        $areas = Area::all();

        return view('teacher.create', compact('training_centers', 'areas'));
    }

    public function store(Request $request)
    {

        // Mantiene tu lógica de guardado masivo para incluir todos los datos del formulario
        $teacher = Teacher::create($request->all());

        //return redirect()->route('teacher.index');
        return response()->json($teacher);
    }

    public function show(Teacher $teacher)
    {

        //return view('teacher.show', compact('teacher'));
        return response()->json($teacher);
    }

    public function edit(Teacher $teacher)
    {

        // Carga las relaciones necesarias para los select de la vista de edición
        $training_centers = Training_center::all();
        $areas = Area::all();

        //return view('teacher.edit', compact('teacher', 'training_centers', 'areas'));
        return response()->json(compact('teacher', 'training_centers', 'areas'));
    }

    public function update(Request $request, Teacher $teacher)
    {

        // Datos básicos existentes
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->area_id = $request->area_id;
        $teacher->training_center_id = $request->training_center_id;

        // Nuevos datos
        $teacher->age = $request->age;
        $teacher->phone = $request->phone;
        $teacher->profession = $request->profession;
        $teacher->photo = $request->photo; // Corrección: 'photo' en lugar de 'education'
        $teacher->biography = $request->biography;

        $teacher->save();

        //return redirect()->route('teacher.index');
        return response()->json($teacher);
    }

    public function destroy(Teacher $teacher)
    {

        $teacher->delete();

        //return redirect()->route('teacher.index');
        return response()->json($teacher);
    }
}
