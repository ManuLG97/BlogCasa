@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Property edit</h1>
        <form action="{{route('propiedades.update',$property->id)}}" method="POST">
            @csrf
            @method('PUT')
            Description
            <br/>
            <input type="text" name="description" value="{{$property->description}}" class="form form-control">
            <br/>
            Price
            <br/>
            <input type="text" name="price" value="{{$property->price}}" class="form form-control">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
