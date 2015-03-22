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

Route::get('/', 'PagesController@index');

Route::get('/register', 'UsersController@show');
Route::post('/register', 'UsersController@store');

Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@authenticate');
Route::get('/logout', 'UsersController@logout');

Route::get('/user/{name}', 'UsersController@profile');

Route::get('/add', 'CoffeeController@create');
Route::post('/add', 'CoffeeController@store');
