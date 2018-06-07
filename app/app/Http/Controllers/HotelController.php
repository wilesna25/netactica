<?php

namespace App\Http\Controllers;
use App\Hotel;

use App\Room;


use Illuminate\Http\Request;

class HotelController extends Controller
{
    
    public function show($hotel){
    	//Buscar message por Id 
    	
    	//$message = Message::find($id);


    	$hotel = Hotel::where('id',$hotel)->first();

    	return view('rooms.show', [
    		'hotel' => $hotel,
    	]);
    }

    public function showCreate($city_id){

    	return view('hotels.create', [
    		'city_id' => $city_id,
    	]);

    }


    public function crear(Request $request){

    	$hotel = Hotel::create([
            'name' => $request->input('nombre'),
            'description' => $request->input('descripcion'),
            'phone' => $request->input('telefono'),
            'address' => $request->input('direccion'),
    		'photo' => $request->input('imagen'),
    		'city_id' => $request->input('ciudad')
    	]);

    	// return ("Hotel creado, Id Hotel : ".$hotel->id);
    	return redirect('/nuevoCuarto/'.$hotel->id);
    } 

    public function nuevoCuarto($hotel_id){
    	return view('rooms.create', [
    		'hotel_id' => $hotel_id,
    	]);

    }



    public function crearCuarto(Request $request){

    	$room = Room::create([
            'name' => $request->input('nombre'),
            'priceNigth' => $request->input('precio'),
            'description' => $request->input('descripcion'),
    		'photo' => $request->input('imagen'),
    		'type_id' => $request->input('tipo'),
            'hotel_id' => $request->input('hotel')
    	]);
	
    	return ("Cuarto creado, Id Cuarto : ".$room->id);
    } 

    public function eliminar($id){


    	$hotel = Hotel::where('id',$id)->delete();
	
    	return ("hotel eliminado , Id  : ".$id);
    	
    } 

}
