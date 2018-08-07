<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
	{
    $users = \App\User::limit(5)->get();
    return view('index', ['users'=>$users]);
	}
	public function index2(){
		return view('index');
	}
}
