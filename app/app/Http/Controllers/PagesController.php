<?php

namespace App\Http\Controllers;

// use App\Message;
use App\City;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){
		// $links = [
		// 	'https://platzi.com/laravel' => 'Curso de Laravel',
		// 	'https://laravel.com' => 'Página de Laravel'
	 //    ];

    	// $messages = [
    	// 	[
    	// 		 'id' => 1,
	    // 		 'content' => 'Este es el primer mensaje' ,
	    // 		 'image' => 'http://lorempixel.com/600/338?1',
    	// 	],
    	// 	[
    	// 		 'id' => 2,
	    // 		 'content' => 'Este es el segundo mensaje' ,
	    // 		 'image' => 'http://lorempixel.com/600/338?2',
    	// 	],
    	// ];



    	//$messages = Message::all(); Trae todos los mensajes

    	// $messages = Message::paginate(10); Paginado normal

    	// Paginado descendiente
    	//$messages = Message::latest()->paginate(10);

    	 //dd($messages);

    	$ciudades = City::all();

	    return view('welcome',[
    		 'cities' => $ciudades,
	    ]);
    }


}
