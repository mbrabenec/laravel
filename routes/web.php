<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', 'HelloController@helloFunct');

// Route::get('/another', function () {
//     return "hi another";
// });

Route::get('/another', 'AnotherController@index');


Route::get('/mike', 'MikesController@index');
Route::get('/movies', 'MovieController@index');
Route::get('/movies/show', 'MovieController@show');
Route::get('/movies/store', 'MovieController@store');


Route::get('/better/movies', 'BetterMovieController@index');
Route::get('/better/show', 'BetterMovieController@show');
