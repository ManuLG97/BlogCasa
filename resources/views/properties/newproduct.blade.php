@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Crea una Propiedad</h1>
        <form action="{{route('propiedades.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            Descripcion
            <br/>
            <input type="text" name="description" class="form form-control">
            <br/>
            <br/>
            Precio
            <br/>
            <input type="text" name="price" class="form form-control">
            <br/>
            <br/>
            Foto
            <br/><br/>
            <input type="file" name="fotocasa">
            <br/><br/>
            <input type="submit" class="btn btn-primary" value="Guardar">
                        <br/>
        </form>
        <br/>
    </div>

@endsection