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

Route::name('home')->get('/home', 'DashboardController@index');


// --------------------------------------- Entrega.
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
// --------------------------------------- Fi entrega.

Route::name('ruta_show_categoria')->get('/category/show/{id}', 'CategoriesController@show');
Route::name('ruta_crear_categoria')->get('/category/create', 'CategoriesController@create');
/*CREAR UN PRODUCTE*/
Route::name('ruta_guardar_category')->post('/category', 'CategoriesController@store');
/*EDITAR UN PRODUCTE*/
Route::name('ruta_editar_category')->get('/category/{category}/edit', 'CategoriesController@edit');

Route::name('ruta_actualitzar_category')->put('/category/{category}/update', 'CategoriesController@update');

Route::name('ruta_eliminar_category')->delete('/category/{category}/delete', 'CategoriesController@destroy');

Route::name('ruta_categories')->get('/categories', 'CategoriesController@index');

//RUTES PER A NOTES
Route::group(['prefix' => 'user'], function () {
    Route::resource('notes', 'NotesController');
});
Route::post('user/notes/{id}/rating', 'NotesController@puntuar')->name('puntuar');
Auth::routes();

/**
 * USERS (admin)
 * Gestionar usuaris des del panell d'administració.
 * - resources/views/admin/users
 *
 * Route::resource
 *
 * Mitjançant aquest tipus de "ruta" fem servir l'arquitectura REST i ens
 * estalviem crear una ruta per a cada acció, és el mètode el que determina
 * quina acció dur a terme.
 *
 * GET       home/users          -> index()
 * GET       home/users/create   -> create()
 * POST      home/users          -> store(Request $request)
 * GET       home/users/:id      -> show($id)
 * GET       home/users/:id/edit -> edit($id)
 * PUT/PATCH home/users/:id      -> update(Request $request, $id)
 * DELETE    home/users/:id      -> destroy($id)
 */
Route::resource('home/users', 'UserController');
