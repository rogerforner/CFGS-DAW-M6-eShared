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



Route::middleware(['role:admin|free|pro|moderator'])->group(function () {

  Route::group(['prefix' => 'user'], function () {
      Route::resource('notes', 'NotesController');
      Route::resource('profile', 'UserProfileController');
  });
  Route::name('ruta_show_categoria')->get('/category/show/{id}', 'CategoriesController@show');
  Route::post('user/notes/{id}/rating', 'NotesController@puntuar')->name('puntuar');

  Route::name('home')->get('/home', 'DashboardController@index');

Route::middleware(['role:admin|moderator'])->group(function () {
  Route::resource('home/users', 'UserController');

  Route::name('ruta_crear_categoria')->get('/category/create', 'CategoriesController@create');

  Route::name('ruta_guardar_category')->post('/category', 'CategoriesController@store');

  Route::name('ruta_editar_category')->get('/category/{category}/edit', 'CategoriesController@edit');

  Route::name('ruta_actualitzar_category')->put('/category/{category}/update', 'CategoriesController@update');

  Route::name('ruta_eliminar_category')->delete('/category/{category}/delete', 'CategoriesController@destroy');

  Route::name('ruta_categories')->get('/categories', 'CategoriesController@index');
});
});

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



//RUTES PER A NOTES

Auth::routes();
