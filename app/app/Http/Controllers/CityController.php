<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
   //
    public function show($id)
    {
    	$city = City::where('id',$id)->first();
    	
    	return view('hotels.show', [
    		'city' => $city,
    	]);
    }
}
