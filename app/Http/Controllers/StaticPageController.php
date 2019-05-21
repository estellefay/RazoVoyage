<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    
    public function numberRandom()
    {
        $number = rand ( 1 ,  10 );
        dump($number);
        if ($number == 10 ) {
            return view('about', ['message' => 'Avec le code surprise bbénéficier de -50% sur tous le site']);
        }
        return view('about');
    }


    
}
