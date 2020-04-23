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
        $peliculas = Movie::paginate(5);
        return view('movies.listMovies')->with('peliculas', $peliculas);
    }


    public function show($id)
    {
        $pelicula = Movie::find($id);
        return view('movies.detailMovie')->with('pelicula', $pelicula);
    }


    public function edit($id)
    {
        $peliculaEditar = Movie::find($id);
        $generos = Genre::all();
        $actores = Actor::all();
        return view('movies.editMovie', compact('peliculaEditar', 'generos', 'actores'));
    }


    public function update(Request $request, $id)
    {
        $peliculaEditar = Movie::find($id);
        $peliculaEditar->title = $request->input('title');
        $peliculaEditar->rating = $request->input('rating');
        $peliculaEditar->awards = $request->input('awards');
        $peliculaEditar->genre_id = $request->input('genre_id');
        $peliculaEditar->length = $request->input('length');


        if ($request->hasFile('poster')) {
            $ruta =  $request->file('poster')->store('public');
            $nombreArchivo = basename($ruta);
            $peliculaEditar->poster = $nombreArchivo;
        }

        $peliculaEditar->update();
        return redirect('/movies/listMovies');
    }
}
