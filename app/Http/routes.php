<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware'=>['lang']],function(){
	Route::get('/', function () {
		return view('welcome');
	});
	Route::auth();
	Route::get('/home', 'HomeController@index');

	Route::group(['prefix'=>'eventos'],function(){
		Route::get('/calendario', 'EventController@index');
	});
	Route::group(['prefix'=>'tiendas'],function(){
		Route::get('/carrito'		   ,'ShopController@cart');
		Route::get('/addCarrito/{id}'  ,'ShopController@addCart');
		Route::get('/showCarrito' 	   ,'ShopController@show');
	});
});