@extends('layouts.app')

@section('content')
    <h1>LISTAR APRENDICES</h1>

    <div class ="container">
        <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>cell_number</th>
                    <th>course_id</th>
                    <th>computer_id</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <br>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->email }}</td>
                        <td>{{ $product->cell_number }}</td>
                        <td>{{$product->course->course_number}}</td>
                        <td><a href="{{ route('apprentice.show', $apprentice->id) }}">Mostrar</a></td>
                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection
