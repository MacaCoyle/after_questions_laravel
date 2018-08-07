<?php

namespace App\Http\Controllers;
use Auth;
use App\User;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function perfil()
    {
    	$userId = Auth::user()->id;
    	$usuario = User::find($userId);
    	return view('perfil',['usuario'=>$usuario]);
    }
}
