<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    //
    public function bilan()
    {
        return $this->hasOne('App\Bilan');
    } 

    public function posts() 
    { 
        return $this->hasMany('App\Post'); 
    } 

    public function category() 
    { 
        return $this->belongsToMany('App\Category'); 
    } 
}
