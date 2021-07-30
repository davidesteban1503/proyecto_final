@extends('layouts.cita')

@section('contenido')

<h2>Nueva cita</h2>
<form action="/citas/{{$cita->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="col-md-4 mx-auto ">
          <label for="" class="form-label">Nombres</label>
          <input  id="name" name="name" type="text" class="form-control" value="{{$cita->name}}">
        </div>
        <div class="col-md-4 mx-auto">
          <label for="" class="form-label">Apellidos</label>
          <input id="lastname" name="lastname" type="text" class="form-control" value="{{$cita->lastname}}">
        </div>
        <div class="col-md-4 mx-auto">
            <label for="" class="form-label">fecha y hora</label>
            <input id="fechayhora" name="fechayhora" type="dataTime" class="form-control" value="{{$cita->fechayhora}}">
          </div>
          <div class="col-md-4 mx-auto">
            <label for="" class="form-label">Especialidad</label>
            <input id="especialidad" name="especialidad" type="text" class="form-control" value="{{$cita->especialidad}}" >
          </div>
        <div class="col-4 mx-auto">
            <a href="/citas" class="btn btn-outline-danger mt-4" tabindex="5">Cancelar</a>
          <button class="btn btn-outline-primary mt-4" type="submit" tabindex="4">confirmar</button>
        </div>
</form>


@endsection