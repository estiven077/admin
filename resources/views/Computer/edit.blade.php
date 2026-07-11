@extends('layouts.app')

@section('content')
    <h1>Actualizar computador</h1>

    <form action="{{ route('computer.update', $computer) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Número del Computador:
            <br>
          
            <input type="text" name="number" value="{{ old('number', $computer->number) }}">
        </label>
        <br>
        
        <label>
            Marca:
            <br>
          
            <input type="text" name="brand" value="{{ old('brand', $computer->brand) }}">
        </label>
        <br>

        <button type="submit">Actualizar Computador</button>

    </form>
@endsection