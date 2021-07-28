@extends('layouts.plantillausuarios');

@section('contenido');
<h2>Editar Registro</h2>

<form action="/usuarios/{{$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="col-md-4">
          <label for="" class="form-label">Nombres</label>
          <input  id="name" name="name" type="text" class="form-control" value="{{$usuario->name}}">
        </div>
        <div class="col-md-4">
          <label for="" class="form-label">Apellidos</label>
          <input id="lastname" name="lastname" type="text" class="form-control" value="{{$usuario->lastname}}">
        </div>
        <div class="col-md-4">
          <label for="" class="form-label">Correo</label>
          <input id="email" name="email" type="email" class="form-control" value="{{$usuario->email}}">
        </div>
        <div class="col-md-4">
            <label for="" class="form-label">Telefono</label>
            <input id="phone" name="phone" type="number" class="form-control" value="{{$usuario->phone}}">
          </div>
          <div class="col-md-4">
            <label for="" class="form-label">Rol</label>
            <input id="rol" name="rol" type="text" class="form-control" value="{{$usuario->rol}}">
          </div>
          <div class="col-md-4">
            <label for="" class="form-label">contraseña</label>
            <input id="password" name="password" type="password" class="form-control" value="{{$usuario->password}}" >
          </div>
        <div class="col-4">
            <a href="/usuarios" class="btn btn-outline-danger mt-4" tabindex="5">Cancelar</a>
          <button class="btn btn-outline-primary mt-4" type="submit" tabindex="4">Guardar</button>
        </div>
</form>
@endsection