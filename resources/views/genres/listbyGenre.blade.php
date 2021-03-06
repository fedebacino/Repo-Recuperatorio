@extends('layouts.plantilla')
@section('content')

<h2 class="text-center py-4">{{$genero->name}}</h2>
<main>

    @foreach ($genero->movies as $movie)

    <div class="row justify-content-center">
        <div class="card" style="width: 40rem" ; id="tarjGenre">
            <div class="card-body">
                <h5 class="card-title"><a href="/movies/detailMovie/{{ $movie->id }}">{{$movie->title}}
                    </a>
                    <span class="badge"> {{$movie->rating}}</span>
                </h5>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($movie->actors as $actor)
                <li class="list-group-item"><a href="/actors/detailActor/{{$actor->id}}">{{$actor->first_name}} {{$actor->last_name}}</a></li>
                @endforeach
                <li class="list-group-item"><small>Duracion: {{$movie->length ?? ''}} min || <a href="/genres/listbyGenre/{{$movie->genre->id }}">{{$movie->genre->name ?? ''}}</a> </small>
                </li>
            </ul>
        </div>
    </div>
    @endforeach
</main>