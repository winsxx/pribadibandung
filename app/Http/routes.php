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

Route::get('home', function(){
    return view('pendaftar.home');
});

Route::get('ubahdatadiri', 'SiswaController@ubah');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'SiswaController@getHome');

Route::get('admin', 'AdminController@getHome');

Route::get('humas', 'HumasController@getHome');

Route::get('bendahara', 'BendaharaController@getHome');

Route::post('hasilform','SiswaController@store');

Route::post('buktibayar','SiswaController@postBuktiBayar');

Route::get('sahkan/{id}', 'BendaharaController@getSahkan');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
