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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aspirants/create','AspirantController@create'); //formulario
Route::post('/aspirants/create','AspirantController@store');//crea nuevo aspirante


Route::get('/vacants/create','VacantController@create');
Route::post('/vacants/create','VacantController@store');

