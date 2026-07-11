@extends('layouts.app')

@section('content')

<h1>Lista de Cursos</h1>
<br>

<div class="container">

    
    <a href="{{ route('course.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nuevo Curso
    </a>

    <table id="idCourse" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Id</th>
                <th>Course Number</th>
                <th>Day</th>
                <th>Area</th>
                <th>Training Center</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($courses as $course)

            <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_number }}</td>
                    <td>{{ $course->day }}</td>
                    <td>{{ $course->area_id }}</td>
                    <td>{{ $course->training_center_id }}</td>

                   
                        <a href="{{ route('course.show', $course->id) }}">Mostrar</a> &nbsp;&nbsp;

                        <a href="{{ route('course.edit', $course->id) }}">Editar</a> &nbsp;&nbsp;

                        <form action="{{ route('course.destroy', $course->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                        </form> 
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>
    <br>
</div>

@endsection