@extends('layouts.app')

@section('content')
    <h1>Actualizar centro de entrenamiento</h1>

    <form action="{{ route('training_center.update', $training_center) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            
            <input type="text" name="name" value="{{ old('name', $training_center->name) }}">
        </label>
        <br>
        
        <label>
            Ubicación:
            <br>
           
            <input type="text" name="location" value="{{ old('location', $training_center->location) }}">
        </label>
        <br>

        <button type="submit">Actualizar Centro</button>

    </form>
@endsection