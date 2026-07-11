@extends('layouts.app')

@section('content')
    <h1>Actualizar profesor</h1>

    <form action="{{ route('teacher.update', $teacher) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $teacher->name) }}">
        </label>
        <br>
        
        <label>
            Email:
            <br>
            <input type="email" name="email" value="{{ old('email', $teacher->email) }}">
        </label>
        <br>

        <button type="submit">Actualizar Profesor</button>

    </form>
@endsection
