@extends('layouts.admin')

@section('titulo','Productos')

@section('contenido')

<div class="row">
	<div class="col-3"></div>

	<div class="col"><br><br><br>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('/imagenes/img_productos/ej9YWXBoQ53GsVoX9NuB4v3QX0jIIOAbSBciUmtr.jpeg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/imagenes/img_productos/q7kLK8dThnXm01aoFSEBFsiN7FBYSgf4MtbqzklL.jpeg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/imagenes/img_productos/wIfi9xbHxWt7kCJng3Y8RVciHG4PUUB9TTLPTrua.jpeg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
	<div class="col-3"></div>
</div>

<div class="row">
	@foreach($productos as $producto)
		<div class="col col-sm-12 col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="{{asset('imagenes/'.$producto->img)}}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{$producto->nombre}}</h5>
			    <p class="card-text">{{$producto->descripcion}}</p>
			    <a href="#" class="btn btn-primary">Detalles</a>
			  </div>
			</div>
		</div>
	@endforeach
</div>

@endsection