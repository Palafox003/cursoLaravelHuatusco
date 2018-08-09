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
Route::get('palafox', function () {
    return 'Hello Palafox';
});
Route::get('saludar/{nombre?}',function ($nombre="Por favor inserta tu nombre."){
	return 'Hola '.$nombre;
});
Route::get('saludo','ejemploController@ejemplo');
Route::get('catalogo','ejemploController@index');

Route::resource('productos','productosController')->middleware('auth');

Route::resource('usuarios','usersController');
Route::resource('usuario/direccion','direccionesController');
Route::get('usuario/{id}/direcciones','direccionesController@showDirecciones');
Route::get('usuario/{id}/direcciones/add','direccionesController@direccionesForm');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
