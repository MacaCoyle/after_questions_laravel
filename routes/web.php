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
	$users = \App\User::limit(5)->get();
    return view('index', ['users'=>$users]);

});

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();



Route::get('/faqs', 'FaqsController@faqs')->name('faqs');

Route::get('/juego', 'JuegoController@juego')->name('juego');
