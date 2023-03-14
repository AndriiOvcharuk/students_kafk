<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function getOrders(Request $request)
    {
        $userId = $request->user_id;

        $orders = Order::where('user_id', $userId)->get();

        return view('orders', [
            'orders' => $orders
        ]);
    }
}
