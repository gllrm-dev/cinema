@extends('layouts.admin')
@section('content')
  <form action="">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group">
      <label for="correo">Correo</label>
      <input type="text" name="correo" class="form-control">
    </div>
    <div class="form-group">
      <label for="contrasena">Contraseña</label>
      <input type="text" name="contrasena" class="form-control">
    </div>
    <button class="btn btn-primary">Registrar</button>
  </form>
@stop  
