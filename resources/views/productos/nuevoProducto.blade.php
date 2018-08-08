@extends('layouts.admin')

@section('titulo','Catalogo')

@section('contenido')
	
	<div class="row">
		<div class="col">
<form>
	<h2>Nuevo Producto</h2>
	  <div class="form-group">
	    <label for="nombre">Nombre del producto</label>
	    <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre">
	  </div>
	  <div class="form-group">
	    <label for="modelo">Modelo</label>
	    <input type="text" class="form-control" id="modelo" placeholder="Modelo del producto" name="modelo">
	  </div>

	  <div class="form-group">
	    <label for="marca">Marca</label>
	    <select class="form-control" id="marca" name="marca">
	    	<option value="0">Selecciona una marca</option>
	      <option value="1">Lenovo</option>
	      <option value="2">HP</option>
	      <option value="3">Asus</option>
	      <option value="4">Dell</option>
	      <option value="5">Mac</option>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="img">Imagen</label>
	    <input type="file" class="form-control-file" name="imagen" id="img">
	  </div>

	  <div class="form-group">
	    <label for="descripcion">Descripción</label>
	    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
	  </div>

	  <input class="btn btn-primary" type="submit" value="Guardar">
</form>
		</div>
	</div>
@endsection