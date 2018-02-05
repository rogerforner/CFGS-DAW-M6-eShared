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
Route::get('/enric', function () {
    return view('enric');
});
Route::get('/roger', function () {
    return view('roger');
});
Route::get('/adria', function () {
    return view('adria');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
