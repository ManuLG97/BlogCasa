@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Editar Usuarios</h1>
        <form action="{{route('usuarios.update',$user->id)}}" method="POST">
            @csrf
            @method('PUT')
            Name
            <br/>
            <input type="text" name="name" value="{{$user->name}}" class="form form-control">
            <br/>
            Email
            <br/>
            <input type="text" name="email" value="{{$user->email}}" class="form form-control">
            <br/>
            Password
            <br/>
            <input type="text" name="password" value="{{$user->password}}" class="form form-control">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
