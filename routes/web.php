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

Route::get('xml',function (){
    return view('leitorxml');
});

Route::get('lerxml', 'xmlController@savexml');

Route::get('admin', function () {
    return view('sb-admin-2');
});

Route::get('inicio', 'xmlController@getXml');

Route::get('carros','carroController@getCarros');
Route::post('carros','carroController@addCarro');