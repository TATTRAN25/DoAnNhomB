<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProductController extends Controller
{
    public function productManagement()
    {
        return view('product.productmanagement');
    }

}
