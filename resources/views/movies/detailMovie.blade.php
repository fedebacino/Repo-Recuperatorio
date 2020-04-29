@extends('layouts.plantilla')
@section('content')

<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8" id="tarjetaDetalle">
                <h2 class="card-title">{{$pelicula->title}} <span class="badge"> {{$pelicula->rating}}</span>
                </h2>
                <h4>Actors</h4>
                @foreach ($pelicula->actors as $actor)
                <p class="card-text"><a href="/actors/detailActor/{{$actor->id}}">{{$actor->first_name}} {{$actor->last_name}}</a></p>
                @endforeach
                <p class="card-text"><small class="text-muted">Duration: {{$pelicula->length ?? ''}} min || <a href="/genres/listbyGenre/{{$pelicula->genre->id }}">{{$pelicula->genre->name ?? ''}}</a> </small></p>
            </div>
        </div>
    </div>
</main>
@endsection