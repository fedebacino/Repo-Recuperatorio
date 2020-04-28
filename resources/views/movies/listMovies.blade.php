@extends('layouts.plantilla')
@section('content')
<h2 class="text-center py-4">LISTADO DE PELICULAS</h2>


<div class="spacer px-5 mb-5">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>TITLE</th>
                <th>VIEW</th>
                <th>EDIT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td><a href="/movies/detailMovie/{{$value->id}}">
                        <ion-icon name="eye"></ion-icon>
                    </a></td>
                <td><a href="/movies/editMovie/{{$value->id}}">
                        <ion-icon name="create"></ion-icon>
                    </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{$peliculas->links()}}
    </div>
</div>


@endsection