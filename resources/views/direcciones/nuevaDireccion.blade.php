@extends('layouts.admin')

@section('titulo','Nueva Dirección')

@section('contenido')

<div class="row">
		<div class="col">
<form method="post" action="/usuario/direccion">

	<h2>Nueva Dirección de {{$usuario->nombre}} {{$usuario->paterno}} {{$usuario->materno}}</h2>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{$usuario->id}}">

	  <div class="form-group">
	    <label for="estado">Estado</label>
	    <input type="text" class="form-control" id="estado" placeholder="" name="estado">
	  </div>

	  <div class="form-group">
	    <label for="ciudad">Ciudad</label>
	    <input type="text" class="form-control" id="ciudad" placeholder="" name="ciudad">
	  </div>

	  <div class="form-group">
	    <label for="colonia">Colonia</label>
	    <input type="text" class="form-control" id="colonia" placeholder="" name="colonia">
	  </div>

	  <div class="form-group">
	    <label for="calle">Calle</label>
	    <input type="text" class="form-control" id="calle" placeholder="" name="calle">
	  </div>

	  <div class="form-group">
	    <label for="numero">Numero</label>
	    <input type="text" class="form-control" id="numero" placeholder="" name="numero">
	  </div>

	  <div class="form-group">
	    <label for="cp">C.P.</label>
	    <input type="text" class="form-control" id="cp" placeholder="" name="cp">
	  </div>


	  <input class="btn btn-primary" type="submit" value="Guardar">
</form>
		</div>
	</div>

@endsection