<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;

class MoviesController extends Controller
{
    public function index()
    {
        $peliculas = Movie::paginate(12);
        $genres = Genre::all();
        return view('welcome')->with('peliculas', $peliculas)->with('genres', $genres);
    }


    public function list()
    {
        $peliculas = Movie::paginate(10);
        return view('movies.listMovies')->with('peliculas', $peliculas);
    }


    public function show($id)
    {
        $pelicula = Movie::find($id);
        return view('movies.detailMovie')->with('pelicula', $pelicula);
    }


    public function edit($id)
    {
        $peliculaEdit = Movie::find($id);
        $generos = Genre::all();
        $actores = Actor::all();
        return view('movies.editMovie', compact('peliculaEdit', 'generos', 'actores'));
    }


    public function update(Request $request, $id)
    {
        $peliculaEdit = Movie::find($id);
        $peliculaEdit->title = $request->input('title');
        $peliculaEdit->rating = $request->input('rating');
        $peliculaEdit->awards = $request->input('awards');
        $peliculaEdit->genre_id = $request->input('genre_id');
        $peliculaEdit->length = $request->input('length');


        if ($request->hasFile('poster')) {
            $ruta =  $request->file('poster')->store('public');
            $nombreArchivo = basename($ruta);
            $peliculaEdit->poster = $nombreArchivo;
        }

        $peliculaEdit->update();
        return redirect('/movies/listMovies');
    }
}
