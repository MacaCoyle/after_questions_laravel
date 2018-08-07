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

Route::get('/', 'CardsController@index');
Route::get('/home', 'CardsController@index2')->name('home');

Auth::routes();

Route::get('/faqs', 'FaqsController@faqs')->name('faqs');

Route::get('/juego', 'JuegoController@juego')->name('juego');

Route::get('/juego/{categoria}', 'JuegoController@questions')->name('juego');

Route::get('/perfil', 'PerfilController@perfil')->name('perfil');


//route::post funcion para editar y guardar
