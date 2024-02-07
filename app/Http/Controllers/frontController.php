<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    function mainPage(){
        return view ("mainPage");
    }

    function propertyPage(){
        return view("propertyPage");
    }

    function aboutPage(){
        return view("aboutPage");
    }

    function contactPage(){
        return view("contactPage");
    }
}
