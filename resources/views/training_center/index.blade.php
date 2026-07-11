@extends('layouts.app')

@section('content')
    <h1>Lista de Centros de Formación</h1>
    <br>

    <div class="container">
        
        <a href="{{ route('training_center.create') }}" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Nuevo centro
        </a>

        <table id="idTrainingCenter" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($training_centers as $training_center)
                    <tr>
                        <td>{{ $training_center->id }}</td>
                        <td>{{ $training_center->name }}</td>
                        <td>{{ $training_center->location }}</td>

                        
                        <td>
                            <a href="{{ route('training_center.show', $training_center->id) }}">Mostrar</a> &nbsp;&nbsp;

                            <a href="{{ route('training_center.edit', $training_center->id) }}">Editar</a> &nbsp;&nbsp;

                            <form action="{{ route('training_center.destroy', $training_center->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este centro?')">Eliminar</button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    </div>
@endsection
