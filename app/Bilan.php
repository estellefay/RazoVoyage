<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilan extends Model
{
    //
    public function voyage()
    {
        return $this->belongsTo('App\Voyage');
    } 
}
