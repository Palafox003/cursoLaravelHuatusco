@extends('layouts.admin')

@section('titulo','Usuarios')

@section('contenido')

	<h2>Usuarios Registrados</h2>

	<table class="table">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>E-mail</th>
			<th>Telefono</th>
			<th>Agregar Dirección</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
@foreach($usuarios as $usuario)
		<tr>
			<td>{{$usuario->id}}</td>
			<td>{{$usuario->nombre}} {{$usuario->paterno}} {{$usuario->materno}}</td>
			<td>{{$usuario->email}}</td>
			<td>{{$usuario->telefono}}</td>
			<td>
				<a class="btn btn-success" href="/usuario/{{$usuario->id}}/direcciones" role="button">Dirección</a>
			</td>
			<td>
				<a class="btn btn-primary" href="/usuarios/{{$usuario->id}}/edit" role="button">Editar</a>
			</td>
			<td>
				<form method="post" action="/usuarios/{{$usuario->id}}">

					 <input type="hidden" name="_method" value="DELETE">
    				<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<input class="btn btn-danger" type="submit" value="Eliminar">
				</form>
			</td>
		</tr>
@endforeach

	</table>

@endsection