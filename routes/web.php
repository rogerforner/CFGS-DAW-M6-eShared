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

// Rutes entrega Àlex
Route::get('/', function () {
    return view('index');
});

Route::get('/roger', function () {
  return view('entrega.roger');
});
Route::get('/contactar', function () {
  return view('entrega.contactar');
});

Route::get('/adria', function () {
  return view('entrega.adria');
});

Route::get('/enric', function () {
  return view('enviarCorreu');
});
// ---------------------------------------

Auth::routes();
