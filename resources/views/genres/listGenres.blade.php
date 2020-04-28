@extends('layouts.plantilla')
@section('content')
<h2 class="text-center py-4">GENRES</h2>


<div class="spacer px-5 mb-5">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>GENRE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($generos as $genero)
            <tr>
                <td>{{$genero->id}}</td>
                <td><a href="/genres/listbyGenre/{{ $genero->id }}" class="btn">{{ $genero->name }}</a></td>

                @endforeach

        </tbody>
    </table>
</div>

@endsection