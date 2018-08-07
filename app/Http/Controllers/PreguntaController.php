<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntaController extends Controller
{
        public function pregunta()
    {	
    	$preguntas = pregunta::All();

    	$VAC = compact("preguntas");

        return view('juego', $VAC);
    }
}
