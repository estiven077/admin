@extends('layouts.app')

@section('content')

<h1>Lista de Instructores</h1>
<br>

<div class="container">

    <a href="{{ route('teacher.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nuevo Profesor
    </a>

    <table id="idTeacher" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Area</th>
                <th>Training Center</th>
                <th>Acción</th>
            </tr>
        </thead>

    <tbody>
            @foreach ($teachers as $teacher)

            <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->area_id }}</td>
                    <td>{{ $teacher->training_center_id }}</td>

                    <td>
                        <a href="{{ route('teacher.show', $teacher->id) }}">Mostrar</a> &nbsp;&nbsp;
                        
                        <a href="{{ route('teacher.edit', $teacher->id) }}">Editar</a> &nbsp;&nbsp;

                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('delete')
                            <!-- Solo este botón tiene el color rojo con btn-danger -->
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este instructor?')">Eliminar</button>
                        </form> 
                    </td>

                </tr>

            @endforeach

        </tbody>
    </table>
    <br>
</div>

@endsection