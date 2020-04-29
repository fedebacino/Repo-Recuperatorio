@extends('layouts.plantilla')
@section('content')
@section('aside')
@include('../partials.aside')

@endsection

<section class="col-12 col-sm-12 col-md-9 pt-5">
    <div class="row justify-content-center">
        @foreach ($peliculas as $pelicula)
        <div class="card" style="width: 18rem;" id="tarjeta">
            <a href="/movies/detailMovie/{{ $pelicula->id }}" class="tarjMain">
                <div class="card-body">
                    <h5 class="card-title">
                        <p>{{$pelicula->title}}</p>
                    </h5>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="pagination">
        {{$peliculas->links()}}
    </div>
</section>
</main>
@endsection