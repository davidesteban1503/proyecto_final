@extends('layouts.plantillabase');

@section('contenido')
<h2>Crear formato de calidad</h2>
<form action="/qualities" method="post">
    @csrf
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="formatname" id="format name">
        <label for="">hora</label>
        <input type="time" class="form-control" name="date" id="date">
        <label for="">Sede</label>
        <input type="text" class="form-control" name="campus" id="campus">
      <a href="/qualities" class="btn btn-secondary" tabindex="5">cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection