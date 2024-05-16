<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CheckoutController extends Controller
{
    public function showOrderHistory()
    {
        $user_id = 1;
        $orders = Order::where('user_id', $user_id)->get();
        return view('orders.order_history', compact('orders'));
    }
}
