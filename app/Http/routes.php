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

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::bind('songs', function($slug)
{
	return \App\Song::whereSlug($slug)->first();
});

//Route::get('/', 'PagesController@index');

//Route::get('about', 'PagesController@about');

//Route::get('songs', 'SongsController@index');

//Route::get('songs/{song}', 'SongsController@show');

//Route::get('songs/{song}/edit', 'SongsController@edit');



patch('songs/{song}', 'SongsController@update');

$router->resource('songs', 'SongsController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
