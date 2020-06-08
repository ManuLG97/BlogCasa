@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Propiedades</h1>




        <table class="table">
            <thead>

            <th>Descripcion</th>
            <th>Precio</th>
            <th>Email de contacto</th>

            </tr>
            @foreach($properties as $property)

                <tr>
                    <td>{{$property->description}}</td>
                    <td>{{$property->price}} €</td>
                    <td>{{\App\Http\Controllers\PropertyController::getUserEmail($property->user_id)}}</td></td>
                    <td>
                        @if($property->fotocasa!=null)<img src="{{asset('storage/'.$property->fotocasa)}}" width="150px">@endif
                    <td/>

                    <td><a href="{{route('propiedades.show', $property->id)}}"><button type="submit">Mostrar</button></a></td>
                    @if($property->user_id == $user)
                    <td><a href="{{route('propiedades.edit', $property->id)}}"><button type="submit">Editar</button></a></td>

                    <td>
                        <form action="{{route('propiedades.destroy', $property->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>

                    </td>
                        @endif
                </tr>

            @endforeach
            <tr>
                <a href="{{ url('/propiedades/create') }}">  <button>Create</button> </a> </br>

            </tr>
            </br>

            </thead>
        </table>
    </div>

@endsection
