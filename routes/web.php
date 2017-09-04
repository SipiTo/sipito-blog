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


Route::get('/', 'PostsController@index');
<<<<<<< HEAD

Route::get('/up', 'PostsController@up');
=======
Route::get('/home', 'HomeController@home');
>>>>>>> afe88af3fe9fd4c7c6d218ec813bf34358bcf79d
