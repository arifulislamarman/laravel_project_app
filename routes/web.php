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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/projects','ProjectController@index');
Route::get('/projects/{id}','ProjectController@show');
Route::get('/create-project','ProjectController@create');
Route::post('/create-project','ProjectController@store');

Route::get('/projects/{id}/edit','ProjectController@edit');
Route::put('/projects/{id}/edit','ProjectController@update');
Route::get('/projects/{id}/delete','ProjectController@destroy');