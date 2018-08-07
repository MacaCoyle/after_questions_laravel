<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [];
    protected $table = "questions";

    public function categoria(){
    	return $this->belongsTo(Category::class, "category_id");
    }
    
}
