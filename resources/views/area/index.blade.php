@extends('layouts.app')

@section('content')
    <h1>Lista de Areas</h1>
    <br>

    <div class="container">
       
        <a href="{{ route('area.create') }}" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Nueva Area
        </a>

        <table id="idArea" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>
                        
                        <!-- Todo unificado correctamente dentro de un solo <td> sin etiquetas repetidas -->
                        <td>
                            <a href="{{ route('area.show', $area->id) }}">Mostrar</a> &nbsp;&nbsp;

                            <a href="{{ route('area.edit', $area->id) }}">Editar</a> &nbsp;&nbsp;

                            <form action="{{ route('area.destroy', $area->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta área?')">Eliminar</button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        <br>
    </div>

@endsection