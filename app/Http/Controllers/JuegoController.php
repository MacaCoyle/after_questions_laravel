<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\Category;

class JuegoController extends Controller
{
    public function juego()
    {	
    	$categories = Category::All();

    	$VAC = compact("categories");

        return view('juego', $VAC);
    }

    public function Questions(){

     $questions = Questions::limit(1);
     $VAC = compact("questions");

        return view('juego', $VAC);
    }

    // public function Answers(){

   	// 	$answers = answers::limit(3);
    // 	$VAC = compact("answers");

    //  	return view('juego', $VAC);
    // }
}
