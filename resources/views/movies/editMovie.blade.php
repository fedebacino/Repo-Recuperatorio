@extends('layouts.plantilla')
@section('content')

<h2 class="text-center pt-4">{{$peliculaEdit->title}}</h2>
<div class="container-fluid mb-4">
    <div class="row mt-4">
        <div class="col-lg-8 offset-lg-2 pb-4">
            <form action="/movies/updateMovie/{{$peliculaEdit->id}}" method="POST" enctype="multipart/form-data">
                @method("patch")
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{old('title', $peliculaEdit->title)}}">
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control" name="rating" id="rating" value="{{old('rating', $peliculaEdit->rating)}}">
                </div>
                <div class="form-group">
                    <label for="awards">Awards</label>
                    <input type="number" class="form-control" name="awards" id="awards" value="{{old('awards', $peliculaEdit->awards)}}">
                </div>
                <div class="form-group">
                    <label for="length">Duration</label>
                    <input type="number" class="form-control" name="length" id="length" value="{{old('length', $peliculaEdit->length) }}">
                </div>

                <input type="hidden" name="genre_id" value="{{$peliculaEdit->genre_id}}">
                <div class="form-group">
                    <label for="generos">Genre</label>
                    <select class="form-control" name="genre_id" id="genre_id">
                        <option value="{{$peliculaEdit->genre_id}}">{{$peliculaEdit->genre->name ?? ''}}</option>
                        @foreach ($generos as $genero)
                        <option value="{{$genero->id}}">{{$genero->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="">
                    <label for="">Poster: </label><br>
                    <input type="file" name="poster" value="">
                </div>


                <div class="text-center">
                    <<button class="btn btn-primary ">ADD</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection