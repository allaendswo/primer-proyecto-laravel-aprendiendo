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

Route::get("/usuario", "UserController@index");

Route::get("/tarea/{id}", "UserController@show")
->where("id", "[0-9]+");

Route::get("/usuario/nuevo", "UserController@create");
