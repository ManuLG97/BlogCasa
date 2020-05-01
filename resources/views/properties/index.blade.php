@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Properties</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Description</th>
                <th>Price</th>
                <th>User_id</th>
                <th></th>
            </tr>
            @foreach($properties as $property)
                <tr>
                    <td>{{$property->description}}</td>
                    <td>{{$property->price}} €</td>
                    <td>{{$property->user_id}}</td>
                    <td>
                    @if($property->fotocasa!=null)<img src="{{asset('storage/'.$property->fotocasa)}}" width="150px">@endif
                    <td/>
                    <td><a href="{{route('propiedades.edit', $property->id)}}">Editar</a></td>
                    <td>
                    <form action="{{route('propiedades.destroy', $property->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection

