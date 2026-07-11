@extends('layouts.app')

@section('content')
    <h1>Actualizar curso</h1>

    <form action="{{ route('course.update', $course) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Número del Curso:
            <br>
            <input type="text" name="course_number" value="{{ old('course_number', $course->course_number) }}">
        </label>
        <br>
        
        <label>
            Día:
            <br>
            <input type="text" name="day" value="{{ old('day', $course->day) }}">
        </label>
        <br>

        <button type="submit">Actualizar Curso</button>

    </form>
@endsection