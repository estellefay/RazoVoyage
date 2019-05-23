<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function voyage() 
    { 
        return $this->belongsToMany('App\Voyage'); 
    } 
}
