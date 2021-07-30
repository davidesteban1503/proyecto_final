@extends('layouts.plantillausuarios')

@section('contenido')
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <form class="d-flex">
        <a href="usuarios/create"  class="btn btn-outline-warning me-2">Crear</a>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
  <table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">CORREO</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">ROL</th>
           
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($modulousuarios as $usuario)
    <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->lastname}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->phone}}</td>
            <td>{{$usuario->rol}}</td>
            

        <td>
            <form action="{{url('usuarios',$usuario->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/usuarios/edit/{{$usuario->id}}" class="btn btn-outline-info">editar</a>
                <button type="submit" class="btn btn-outline-danger">eliminar</button>
            </form>
        </td>
    </tr>
            
        @endforeach
    </tbody>
    

  </table>
@endsection