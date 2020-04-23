<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;


class GenresController extends Controller
{
    public function list()
    {
        $generos = Genre::paginate(12);
        return view('genres.listGenres')->with('generos', $generos);
    }


    public function show($id)
    {
        $genero = Genre::find($id);
        return view('genres.listbyGenre')->with('genero', $genero);
    }
}
