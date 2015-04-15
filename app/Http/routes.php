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

Route::get('/', function(){
    return view('pendaftar.index');
});

Route::get('home', function(){
    return view('pendaftar.home');
});

Route::get('admin', function(){
   return view('pengurus.admin');
});

Route::get('humas', function(){
    return view('pengurus.humas');
});

Route::get('bendahara', function(){
    return view('pengurus.bendahara');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
