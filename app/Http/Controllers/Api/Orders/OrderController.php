<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Braintree\Gateway;


class OrderController extends Controller
{

    public function generate(Request $request)
    {
        $order = new Order();
        $order->user_address = $request->input('user_address');
        $order->customer = $request->input('customer');
        $order->status = $request->input('status');
        $order->total = $request->input('total');
        $order->user_mail = $request->input('user_mail');
        $order->user_phone_number = $request->input('user_phone_number');
        $order->restaurant_id = $request->input('restaurant_id');
        $order->save();

        // Aggiungi i food items all'ordine
        foreach ($request->input('food_items') as $item) {
            $order->foodItems()->attach($item['food_id'], ['quantity' => $item['quantity']]);
        }
        return response()->json(['message' => 'Ordine generato con successo', 'order_id' => $order->id], 200);
    }

}
