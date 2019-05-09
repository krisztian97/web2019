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
Route::get('/', 'UtazasController@index');
Route::get('/ujutazas', 'UtazasController@create')->name('utazas.create');
Route::post('/ujutazasmentes', 'UtazasController@store');
Route::get('/utazas/{Id}', 'UtazasController@show')->name('utazas.show');
Route::post('/jelentkezes/{id}', 'UtazasController@saveApply');

