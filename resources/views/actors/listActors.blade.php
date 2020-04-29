@extends('layouts.plantilla')
@section('content')
<h2 class="text-center py-4">ACTORS</h2>


<div class="spacer px-5 mb-5">
    <table class="table" id="tarjGenre">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>LAST NAME</th>
                <th>VIEW</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actores as $actor)
            <tr>
                <td>{{$actor->id}}</td>
                <td>{{$actor->first_name}}</td>
                <td>{{$actor->last_name}}</td>
                <td><a href="/actors/detailActor/{{$actor->id}}">
                        <ion-icon name="eye"></ion-icon>
                    </a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$actores->links()}}
        <a href="/actors/addActor/" class="btn">Add Actor</a>
    </div>
</div>

@endsection