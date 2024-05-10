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

    public function addProduct()
    {
        return view('product.addproduct');
    }

    public function editProduct()
    {
        return view('product.editproduct');
    }

    public function cart()
    {
        return view('product.cart');
    }

    public function detailProduct()
    {
        return view('product.detailproduct');
    }
}
