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

Route::view('/','index');


Route::view('admin','roles.admin');

Route::view('usuarios','busqueda.bususuario');

//productos
Route::view('productos','productos.productos');

//Login
Route::view('login','login');
Route::post('login','AccesoController@validar');
Route::get('logout','AccesoController@salir');

Route::view('register','register');

//APIS
Route::apiResource('apiusuario','ApiUsuarioController');
Route::apiResource('apiproductos','ApiProductoController');
