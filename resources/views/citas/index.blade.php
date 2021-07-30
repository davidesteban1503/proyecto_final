@extends('layouts.cita')

@section('contenido')
<br><br>
<a href="citas/create" class="btn btn-warning text-center">Nueva Cita</a>
<br><br>
<table class="table table-striped ">
    <thead>
       <tr>
           <th scope="col">ID</th>
           <th scope="col">Nombre</th>
           <th scope="col">Apellido</th>
           <th scope="col">fecha y hora</th>
           <th scope="col">especialidad</th>
           <th scope="col">Acciones</th>
    </tr> 
    </thead>
    <tbody>
        @foreach ($citas as $cita)
        <tr>
            <td>{{$cita->id}}</td>
            <td>{{$cita->name}}</td>
            <td>{{$cita->lastname}}</td>
            <td>{{$cita->fechayhora}}</td>
            <td>{{$cita->especialidad}}</td>

            <td>
                <form action="{{url('citas',$cita->id)}}" method="POST">                   
                @csrf
                @method('DELETE')
                 <a class="btn btn-info" href="/citas/edit/{{$cita->id}}">editar</a>
                 <button class="btn btn-danger" >eliminar</button>
            </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>

  </table>




    
@endsection