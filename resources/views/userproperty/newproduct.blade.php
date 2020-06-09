@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Crea una Propiedad</h1>
        <form action="{{route('imuebles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            Descripcion
            <br/>
            <input required type="text" name="description" class="form form-control">
            <br/>
            <br/>
            Precio
            <br/>
            <input required type="text" name="price" class="form form-control">
            <br/>
            <br/>
            Foto
            <br/><br/>
            <input required type="file" name="fotocasa">
            <br/><br/>
            <input type="submit" class="btn btn-primary" value="Guardar">
                        <br/>
        </form>
        <br/>
    </div>

@endsection