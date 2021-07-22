@extends('layouts.plantillabase');

@section('contenido')
    <a href="qualities/create" class="btn btn-primary">Crear</a>
    <br><br>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombres</th>
                <th scope="col">Fecha</th>
                <th scope="col">Sede</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($qualities as $quality)
            <tr>
                <td>{{$quality->id}}</td>
                <td>{{$quality->formatname}}</td>
                <td>{{$quality->date}}</td>
                <td>{{$quality->campus}}</td>
                <td>
                    <form action="{{url('qualities',$quality->id)}}" method="post">
                    <a href="/qualities/edit/{{$quality->id}}" class="btn btn-primary">editar</a>
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Eliminar</button>
                </form>
                </td>
            </tr> 
                
            @endforeach
        </tbody>


      </table>
@endsection