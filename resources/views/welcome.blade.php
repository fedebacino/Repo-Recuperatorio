@extends('layouts.plantilla')
@section('content')
@section('aside')
@include('../partials.aside')

@endsection

<section class="col-12 col-sm-12 col-md-9 pt-5">
    <div class="row">
        @foreach ($peliculas as $pelicula)
        <div class="card justify-content-center" style="width: 20rem;">
            <a href="/movies/detailMovie/{{ $pelicula->id }}" class="btn3">
                <div class="card-body">
                    <h5 class="card-title">
                        <img src="/storage/{{$pelicula->poster}}" alt="">
                        <p>{{$pelicula->title}}</p>
                    </h5>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div>
        {{$peliculas->links()}}
    </div>
</section>
</main>
@endsection