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

Route::get('/labas', function () {
	return view('labas');
});

// kreipsiuosi i CalculatorController index funkcija

// sitas route'as atsakiingas uz skaiciuokles formos atvaizdavima
Route::get('/calculator', 'CalculatorController@index');


//sitas route'as bus atsakingas uz skaiciavima ir rezultato atvaizdavima
Route::post('/calculator', 'CalculatorController@calculate');

/* Butina susikurti KMIController ir apsirasyti jame index ir calculate funkcijas */

// pasikreipus i sita route'a turime atvaizduoti forma, kur ivesime duomenis
Route::get('/kmi', 'KMIController@index');

// pasikreipus i sita route'a post budu, surinkti duomenis is formos, suskaiciuoti kmi reiksme
// ir atvaizduoti ja view faile, /resources/views/kmi-rezultatas.blade.php
Route::post('/kmi', 'KMIController@calculate');

Route::get('/', 'ProductController@index');
Route::get('/products', 'ProductController@index')->name('products.index');

// produkto sukurimo formos atvaizdavimas
Route::get('/products/create', 'ProductController@create')->name('products.create');

// produkto formos duomenu surinkimas ir issaugojimas i duombaze
Route::post('/products/create', 'ProductController@store')->name('products.store');

// Produkto istrynimas

// dinaminsi route, su ID parametru
// products/delete/3
Route::get('/products/delete/{id}', 'ProductController@delete')->name('products.delete');
