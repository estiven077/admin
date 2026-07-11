@extends('layouts.app')

@section('content')
    <h1>Lista de Computadores</h1>
    <br>

    <div class="container">
        <!-- El botón se movió afuera de la tabla -->
        <a href="{{ route('computer.create') }}" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Nuevo Computador
        </a>

        <table id="idComputador" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Number</th>
                    <th>Brand</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>
                        
                        <!-- Todo agrupado en un solo <td>, ordenado, separado y con el botón rojo -->
                        <td>
                            <a href="{{ route('computer.show', $computer->id) }}">Mostrar</a> &nbsp;&nbsp;
                            
                            <a href="{{ route('computer.edit', $computer->id) }}">Editar</a> &nbsp;&nbsp;

                            <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este computador?')">Eliminar</button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <br>
    </div>
    
@endsection