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
        <div class="col-12">
            <div class="text-muted">
            	<table class="table">
            		<tr>

            			<td>
                   			 <img class="img-thumbnail" src="{{$room->photo}}"> 
            			</td>

            			<td>
            				<h1 class="h3"> {{ $room->name }} </h1>
               
			                <p>
			                    <b>Precio por noche :</b>
			                     {{$room->priceNigth}} 
			                   <!-- <br>  -->
			                </p>


			                   
			                    <!-- <div class="text-muted"> -->
			                        <p><b>Descripción:</b>
			                           {{$room->description}} <br>   
			                         </p>

			                    <p>
			                            <b>Tipo:</b>
			                            {{$room->type_id}}
			                    </p>
			                    <button>Separar</button>
			            </td>
            		</tr>
            	</table>
                


                </div>
            </div>
            <!-- <p class="card-text">
                   Descripción <br>
                   {{$hotel->description}}
            </p>
             -->
        </div>
        @empty
          <p>No hay habitaciones </p>
        @endforelse
    </div>
@endsection