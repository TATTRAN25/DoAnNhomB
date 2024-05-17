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
    public function checkout(Request $request)
    {
        $productIds = json_decode($request->input('products'), true);
        $quantities = json_decode($request->input('quantities'), true);

        session(['checkout_products' => $productIds, 'quantities' => $quantities]);

        return redirect()->route('checkout.detail');
    }

    public function showCheckoutPage()
    {
        $productIds = session('checkout_products', []);
        $quantities = session('quantities', []);

        if (is_null($productIds) || empty($productIds)) {

            return view('products.checkout', ['checkoutProducts' => []]);
        } else {
            $checkoutProducts = Product::whereIn('product_id', $productIds)->get();
            return view('products.checkout', ['checkoutProducts' => $checkoutProducts, 'quantities' => $quantities]);
        }
    }

    public function processCheckout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required|string|max:255',
            'extra_message' => 'nullable|string|max:255',
            // 'card' => 'nullable|string|max:255',
            // 'expiry' => 'nullable|string|max:7',
            // 'cvv' => 'nullable|string|max:3',
            // 'product_ids_json' => 'required|array',
            // 'product_ids_json.*' => 'required|integer|exists:products,product_id',
            // 'quantities' => 'required|array',
            // 'quantities.*' => 'required|integer|min:1',
        ]);

        if (!$request->has('payment-method-cod') && !$request->has('payment-method-card')) {
            $validator->errors()->add('payment_method', 'The payment method field is required.');
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $order = new Order();
        $order->total_price = $request->input('total_price');
        $order->total_quantity = $request->input('total_quantity');
        $order->order_description = $request->input('extra_message');
        $order->address = $request->input('address');
        $order->order_date = Carbon::now();
        $order->delivery_date = Carbon::now()->addDays(3);
        $order->user_id = 1;
        $order->save();


        $productIds = json_decode($request->input('product_ids_json'), true);
        foreach ($productIds as $productId) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->order_id;
            $orderItem->product_id = $productId;
            $orderItem->quantity_order = $request->input('quantities')[$productId];
            $orderItem->payment_method = $request->input('payment-method');
            $orderItem->status_order = 'pending';
            $orderItem->save();
        }

        $user_id = 1;
        $cart = Cart::where('user_id', $user_id)->first();
        if ($cart) {
            $cartItems = $cart->items()->whereIn('product_id', $productIds)->get();
            if ($cartItems->isNotEmpty()) {
                $cartItems->each->delete();
                return redirect()->route('orders.success');
            }
        }

        return redirect()->back()->withErrors(['message' => 'Order failed. Please try again.'])->withInput();
    }

    public function showOrderSuccess()
    {
        $user_id = 1;
        $orders = Order::where('user_id', $user_id)->get();
        return view('orders.order_success', compact('orders'));
    }
}
