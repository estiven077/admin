@extends('layouts.app')

@section('content')
    <h1>Actualizar aprendiz</h1>

    <form action="{{ route('apprentice.update', $apprentice) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $apprentice->name) }}">
        </label>
        <br>

        <label>
            Email:
            <br>
            <input type="email" name="email" value="{{ old('email', $apprentice->email) }}">
        </label>
        <br>

        <label>
            Celular:
            <br>
            <input type="text" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number) }}">
        </label>
        <br>


        <button type="submit">Actualizar Aprendiz</button>

    </form>
@endsection