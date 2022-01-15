@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Crear clientes</h1>
@stop

@section('content')
<form action="/clientes" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input id="id" name="id" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="Documento" name="Documento" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="Correo" name="Correo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="Telefono" name="Telefono" type="text" class="form-control" tabindex="1">    
  </div>

  <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop