<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntas;
use App\Category;

class JuegoController extends Controller
{
    public function juego()
    {	
    	$categories = Category::All();

    	$VAC = compact("categories");

        return view('juego', $VAC);
    }

}
