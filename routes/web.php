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
	//hacer un controller para esta logica
	$users = \App\User::limit(5)->get();
    return view('index', ['users'=>$users]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
