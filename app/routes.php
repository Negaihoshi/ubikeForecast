<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
    return View::make('index');
});


Route::get('/list', 'HomeController@index');

Route::get('/map1', 'HomeController@map');

Route::get('/map', function()
{
	return View::make('map');
});

Route::post('/user', 'UserController@userCheck');

Route::get('/ubike/get', 'UbikeController@getUbike');
