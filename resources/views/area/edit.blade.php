@extends('layouts.app')

@section('content')
    <h1>Actualizar área</h1>

    <form action="{{ route('area.update', $area) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre del Área:
            <br>
            <input type="text" name="name" value="{{ old('name', $area->name) }}">
        </label>
        <br>

        <button type="submit">Actualizar Área</button>

    </form>
@endsection