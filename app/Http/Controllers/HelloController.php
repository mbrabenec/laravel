<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function helloFunct() 
    {
        return "hello from my first controller";
    }
    
}
