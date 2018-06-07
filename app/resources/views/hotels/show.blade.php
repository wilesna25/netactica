@extends('layouts.app')

@section('content')
	<h4 class="h3">Recargar página para ver hotel creado/eliminado (caché)</h4>
	<div class="row">
		<div class="col-3">
			<div>
		  		<a href="/crearHotel/{{$city->id}}">Crear Hotel </a> 
		  	</div>
		</div>
	</div>
	
	<img class="img-thumbnail" src="">
	<p class="card-text">
	</p>

	 <div class="row">
		@foreach($city->hotels as $hotel)
		<div class="col-6">
          	<div class="text-muted">
          		<b>HOTEL: </b>
          		<a href="/habitaciones/{{ $hotel->id }}">{{$hotel->name}} </a> 
	          	<div class="text-muted">

		            <p>
		            		<b>Teléfono:</b>
	          				{{$hotel->phone}}
	          				<br>
		            		<b>Dirección:</b>
		            		{{$hotel->address}}
	          				<br>
          					<b>Descripción</b>
                		   {{$hotel->description}}
		            </p>
		          </div>
          	</div>
			<img class="img-thumbnail" src="{{$hotel->photo}}"> 
             <a href="/habitaciones/{{ $hotel->id }}">Ver Habitaciones </a>
             <a href="/eliminarHotel/{{ $hotel->id }}">Eliminar Hotel </a>
          <div class="row">
         		<br>
          </div>
		</div>
		@endforeach
	</div>
@endsection