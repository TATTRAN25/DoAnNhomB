<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $products = Product::orderBy('created_at', 'desc')->take(8)->get();
        // return response()->json($products);
        return view('home', ['products' => $products]);
    }

    public function getProducts()
    {
        $products = Product::paginate(8);
        return view('products.products', compact('products'));
    }

    public function getProductDetail($productId)
    {

        $product = Product::findOrFail($productId);
        return view('products.productdetail', ['product' => $product]);
    }

    public function search(Request $request)
    {
        $key = $request->get('key');
        $products = Product::search()->paginate(8);
        return view('products.products', compact('products'));
    }
}
