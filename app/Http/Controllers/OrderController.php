<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Mail\OrderShippet;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function ship(Request $request, $orderId) {
    	
    	$order = Order::findOrFail($orderId);

    	Mail::to($request->user())->send(new OrderShippet($order));
    }
}
