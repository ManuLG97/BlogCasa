@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Property edit</h1>
        <form action="{{route('propiedades.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            Description
            <br/>
            <input type="text" name="description" class="form form-control">
            <br/>
            Price
            <br/>
            <input type="text" name="price" class="form form-control">
            <br/>
            <input type="file" name="fotocasa">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
                        <br/>
        </form>
        <br/>
    </div>

@endsection