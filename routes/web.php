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

Route::get('/', 'HomeController@index');
Route::get('/proximosEstrenos','movieController@index');
Route::get('/detallePelicula/{id}','movieController@show');

//Administrador de Peliculas
Route::get('/adminMovies','AdminMovieController@index');
Route::get('/createMovie','AdminMovieController@create');
Route::post('/saveMovie','AdminMovieController@save');
Route::get('/deleteMovie/{id}','AdminMovieController@delete');
