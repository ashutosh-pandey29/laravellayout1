<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    function servicePage(){
        return view('pages.services');
    }
}
