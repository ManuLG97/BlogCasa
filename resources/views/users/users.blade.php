@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Usuarios</h1>




        <table class="table">
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('usuarios.edit', $user->id)}}"><button type="submit">Editar</button></a></td>
                    <td>

                        <form action="{{route('usuarios.destroy', $user->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

