@extends('layouts.admin')

@section('titulo','Nuevo Usuario')

@section('contenido')

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    	 <button type="button" class="close" data-dismiss="alert" 		aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
       
            @foreach ($errors->all() as $error)
                <i class="fas fa-exclamation-triangle"></i>  {{ $error }}<br>
            @endforeach
        
    </div>
@endif


	<div class="row">
		<div class="col">
<form method="post" action="/usuarios">

	<h2>Nuevo Usuario</h2>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	  <div class="form-group">
	    <label for="nombre">Nombre</label>
	    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre">
	  </div>

	  <div class="form-group">
	    <label for="paterno">A. Paterno</label>
	    <input type="text" class="form-control" id="paterno" placeholder="" name="paterno">
	  </div>

	  <div class="form-group">
	    <label for="materno">A. Materno</label>
	    <input type="text" class="form-control" id="materno" placeholder="" name="materno">
	  </div>

	  <div class="form-group">
	    <label for="email">E-mail</label>
	    <input type="email" class="form-control" id="email" placeholder="" name="email">
	  </div>

	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" placeholder="" name="password">
	  </div>

	  <div class="form-group">
	    <label for="telefono">Telefono</label>
	    <input type="text" class="form-control" id="telefono" placeholder="" name="telefono">
	  </div>


	  <input class="btn btn-primary" type="submit" value="Guardar">
</form>
		</div>
	</div>

@endsection