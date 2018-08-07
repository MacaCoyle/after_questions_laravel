<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    protected $fillable = [];
    protected $table = "questions";
    public function categoria(){
    	return $this->belongsTo(Category::class, "category_id");
    }

    // public function pregunta(){
    // 	return $this->
    // }
}
