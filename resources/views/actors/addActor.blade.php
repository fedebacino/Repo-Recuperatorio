@extends('layouts.plantilla')
@section('content')
<h2 class="text-center mt-4">ADD ACTOR</h2>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-lg-8 offset-lg-2 mb-3">
            <form action="/actors/saveActor" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="first_name">NAME</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{old('first_name')}}">
                </div>
                <div class="form-group">
                    <label for="last_name">LAST NAME</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{old('last_name')}}">
                </div>
                <div class="form-group">
                    <label for="rating">RATING</label>
                    <input type="number" class="form-control" name="rating" id="rating" value="{{old('rating')}}">
                </div>

                <div class="text-center">
                    <button class="btn btn-primary ">ADD</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection