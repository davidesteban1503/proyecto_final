@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar formatos de calidad</h2>

<form action="/qualities/{{$quality->id}}" method="post">
    @csrf
    @method('PUT')
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="formatname" id="format name" value="{{$quality->formatname}}">
        <label for="">hora</label>
        <input type="time" class="form-control" name="date" id="date" value="{{$quality->date}}">
        <label for="">Sede</label>
        <input type="text" class="form-control" name="campus" id="campus" value="{{$quality->campus}}">
      <a href="/qualities" class="btn btn-secondary" tabindex="5">cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>



@endsection