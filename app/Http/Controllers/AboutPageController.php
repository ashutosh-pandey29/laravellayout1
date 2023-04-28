<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    function aboutpage(){
        return view('pages.about');
    }
}
