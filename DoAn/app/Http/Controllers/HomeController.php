<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homeProduct()
    {
        return view('home.home_products');
    }
}
