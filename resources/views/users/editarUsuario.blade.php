@extends('layouts.admin')

@section('titulo','Nuevo Usuario')

@section('contenido')

	<div class="row">
		<div class="col">
<form method="post" action="/usuarios/{{$usuario->id}}">

	<h2>Nuevo Usuario</h2>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">

	  <div class="form-group">
	    <label for="nombre">Nombre</label>
	    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" value="{{$usuario->nombre}}">
	  </div>

	  <div class="form-group">
	    <label for="paterno">A. Paterno</label>
	    <input type="text" class="form-control" id="paterno" placeholder="" name="paterno" value="{{$usuario->paterno}}">
	  </div>

	  <div class="form-group">
	    <label for="materno">A. Materno</label>
	    <input type="text" class="form-control" id="materno" placeholder="" name="materno" value="{{$usuario->materno}}">
	  </div>

	  <div class="form-group">
	    <label for="email">E-mail</label>
	    <input type="email" class="form-control" id="email" placeholder="" name="email" value="{{$usuario->email}}">
	  </div>

	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" placeholder="" name="password" value="{{$usuario->password}}">
	  </div>

	  <div class="form-group">
	    <label for="telefono">Telefono</label>
	    <input type="text" class="form-control" id="telefono" placeholder="" name="telefono" value="{{$usuario->telefono}}">
	  </div>


	  <input class="btn btn-primary" type="submit" value="Actualizar">
</form>
		</div>
	</div>

@endsection