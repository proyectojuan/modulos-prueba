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
		function getUserLEnguage(){
	        $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	        return $idioma;
	    }
	    $user_language=getUserLEnguage();
	    if($user_language == 'es' || $user_language == 'en')
			session(['lang'=>$user_language]);    
		else
			session(['lang'=>'en']);
		return view('welcome');
	});
	Route::auth();
	Route::get('/home', 'HomeController@index');
});
