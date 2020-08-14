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

Route::get('hola', function () {
    return view( 'hola USFA');
});
Route::get('foo', function () {
    return 'Hello World';
});
//parametro de ruta
Route::get('user/{id}', function ($id) {
    return 'User'.$id;
});
Route::get('saludar/{nombre}', function ($nombre) {
    return 'HOLA'.$nombre;
});

Route::get('acercade', function () {
    return view('Bienvenido');
});
Route::get('bootstrap', function () {
    return view('Bootstrap');
});