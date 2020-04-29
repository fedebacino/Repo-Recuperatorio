@extends('layouts.plantilla')
@section('content')

<h2 class="text-center py-4">ACTOR DETAILS</h2>
<div class="row justify-content-center">
    <div class="card" style="width: 40rem" id=tarjGenre>
        <div class="card-body">
            <h5 class="card-title ">NAME: {{$actor->first_name}} {{$actor->last_name}}</h5>
        </div>
        <li class="list-group-item ">RATING: {{$actor->rating}}</li>
        <li class="list-group-item">@foreach ($actor->movies as $movie)
            <a href="/movies/detailMovie/{{ $movie->id }}" class="btn1">
                <p>{{$movie->title}}</p>
            </a>

            @endforeach</li>
    </div>
</div>

@endsection