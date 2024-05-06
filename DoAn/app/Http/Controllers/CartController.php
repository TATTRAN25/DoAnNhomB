<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartDetail()
    {
        return view('products.carts');
    }

    public function checkoutProduct()
    {
        return view('products.checkout');
    }
}