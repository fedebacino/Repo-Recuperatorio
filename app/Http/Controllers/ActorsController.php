<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;

class ActorsController extends Controller
{
    public function list()
    {
        $actores = Actor::paginate(10);
        return view('actors.listActors')->with('actores', $actores);
    }

    public function create()
    {
        $actores = Actor::all();
        return view('actors.agregarActor')->with('actores', $actores);
    }


    public function store(Request $request)
    {
        $reglas = [
            'first_name' => 'required',
            'last_name' => 'required',
            'rating' => 'required',
        ];
        $mensajes = [
            'nombre.required' => 'Este campo :attribute es obligatorio...',
            'required' => 'El campo :attribute es obligatorio...',
            'numeric' => 'Ingrese en este campo :attribute sólo números...',
        ];
        $this->validate($request, $reglas, $mensajes);

        $actor = new Actor($request->all());

        $actor->save();
        return redirect('/actors/listActors');
    }


    public function show($id)
    {
        $actor = Actor::find($id);
        return view('actors.detailActor')->with('actor', $actor);
    }
}
