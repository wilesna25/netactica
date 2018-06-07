<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@home');


Auth::routes();

Route::get('/{username}','UsersController@show');

//Route::get('/home', 'HomeController@index')->name('home');

//HOTELES
Route::get('/hoteles/{hotel}','CityController@show');

Route::get('/crearHotel/{city}','HotelController@showCreate');

// Route::post('/nuevoHotel/','HotelController@crear');
Route::post('/nuevoHotel/','HotelController@crear');


Route::get('/nuevoCuarto/{hotel}','HotelController@nuevoCuarto');


Route::post('/crearCuarto/','HotelController@crearCuarto');

//HABITACIONES
Route::get('/habitaciones/{hotel}','HotelController@show');

Route::get('/eliminarHotel/{hotel_id} ','HotelController@eliminar');
