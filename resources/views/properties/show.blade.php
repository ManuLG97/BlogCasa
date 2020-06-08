@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Propiedades</h1>




        <table class="table">
            <thead>

            <th>Descripcion</th>
            <th>Precio</th>
            <th>Id de usuario</th>
            <th>Creado el</th>
            <th>Actulizado el</th>
            <th>Nombre</th>
            <th>Email para contacto</th>


            </tr>
                <tr>
                    <td>{{$property->description}}</td>
                    <td>{{$property->price}} €</td>
                    <td>{{$property->user_id}}</td>
                    <td>{{$property->created_at}}</td>
                    <td>{{$property->updated_at}}</td>
                    <td>{{\App\Http\Controllers\PropertyController::getUserName($property->user_id)}}</td>
                    <td>{{\App\Http\Controllers\PropertyController::getUserEmail($property->user_id)}}</td>

                    <td>
                        @if($property->fotocasa!=null)<img src="{{asset('storage/'.$property->fotocasa)}}" width="150px">@endif
                    <td/>



                </tr>

            <tr>
                <a href="{{ url('/propiedades') }}">  <button>Regresar a propiedades</button> </a> </br>

            <tr>

                </br>

            </thead>
        </table>
    </div>

@endsection
