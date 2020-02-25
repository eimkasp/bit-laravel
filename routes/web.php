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

Route::get('/labas', function () {
	return view('labas');
});

// kreipsiuosi i CalculatorController index funkcija

// sitas route'as atsakiingas uz skaiciuokles formos atvaizdavima
Route::get('/calculator', 'CalculatorController@index');


//sitas route'as bus atsakingas uz skaiciavima ir rezultato atvaizdavima
Route::post('/calculator', 'CalculatorController@calculate');
