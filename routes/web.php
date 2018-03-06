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
Route::get('/home', function () {
    return view('home');
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
Route::name('ruta_crear_categoria')->get('/category/create', 'CategoriesController@create');
/*CREAR UN PRODUCTE*/
Route::name('ruta_guardar_category')->post('/category', 'CategoriesController@store');
/*EDITAR UN PRODUCTE*/
Route::name('ruta_editar_category')->get('/category/{category}/edit', 'CategoriesController@edit');

Route::name('ruta_actualitzar_category')->put('/category/{category}/update', 'CategoriesController@update');

Route::name('ruta_eliminar_category')->get('/category/{category}/delete', 'CategoriesController@destroy');

Route::name('ruta_categories')->get('/categories', 'CategoriesController@index');

Auth::routes();
