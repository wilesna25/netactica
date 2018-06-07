@extends('layouts.app')

@section('content')

<div class="row">
    <h1 class="h3"> 
        Elige tu habitación 
    </h1>
</div>

<br>

    <div class="row">
        @forelse($hotel->rooms as $room)
        <div class="col-6">
            <div class="text-muted">

                <h1 class="h3"> {{ $room->name }} </h1>
               
                <p>
                    <b>Precio por noche :</b>
                     {{$room->priceNigth}} 
                   <!-- <br>  -->
                </p>

                <div class="text-muted">

                   
                    <div class="text-muted">
                        <p><b>Descripción</b>
                           {{$room->description}} <br>   
                         </p>
                    </div>

                    <p class="card-text">
                            <b>Dirección:</b>
                            {{$room->address}}
                    </p>

                    <p>
                            <b>Tipo:</b>
                            {{$room->type_id}}
                    </p>

                    <img class="img-thumbnail" src="{{$hotel->photo}}"> 

                </div>
            </div>
            <!-- <p class="card-text">
                   Descripción <br>
                   {{$hotel->description}}
            </p>
             -->
                <div class="row">
                </div>
        </div>
        @empty
          <p>No hay habitaciones </p>
        @endforelse
    </div>
@endsection