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

Route::get('/', 'UserController@index');
Route::post('/', 'UserController@store');
Route::get('/create', 'UserController@create');
Route::get('/delete/{user}', 'UserController@destroy');
Route::get('/search', 'UserController@search');
Route::get('/user/{user}/edit', 'UserController@edit');
Route::patch('/', 'UserController@update');
