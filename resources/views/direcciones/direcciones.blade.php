@extends('layouts.admin')

@section('titulo','Direcciones')

@section('contenido')

<h2>Direcciones de {{$usuario->nombre}} {{$usuario->paterno}} {{$usuario->materno}}</h2>

<div class="row">
	<div class="col">
		<a class="btn btn-primary" href="/usuario/{{$usuario->id}}/direcciones/add" role="button">Agregar Dirección</a>
	</div>
</div>

	<div class="row">
		<div class="col">
			<table class="table">
				<tr>
					<th>Estado</th>
					<th>Ciudad</th>
					<th>Colonia</th>
					<th>Calle</th>
					<th>Numero</th>
					<th>C.P.</th>
				</tr>
			</table>
		</div>
	</div>

@endsection