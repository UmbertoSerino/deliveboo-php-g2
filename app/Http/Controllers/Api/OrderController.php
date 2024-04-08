<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class OrderController extends Controller
{
    private $validations = [
        'user_address' => ['required', 'string'],
        'customer' => ['required', 'max:80', 'regex:/^[A-Za-z\s\p{P}]+$/u'],
        'status' => ['required', 'boolean', 'accepted'],
        'total' => ['required', 'numeric', 'min:0.01'],
        'user_mail' => ['required', 'string', 'email', 'max:255'],
        'user_phone_number' => ['required', 'string'],
    ];
    private $messageError = [
        'user_address.required' => 'Richiesto l\'inserimento dell\'indirizzo.',

        'customer.required' => 'Inserire un nominativo.',
        'customer.max' => 'Superata la soglia, si prega di non superare gli 80 caratteri',
        'customer.regex' => 'Inserire lettere.',
        'status.required' => 'Effettuare il pagamento',
        'status.boolean' => 'Boolean',
        'status.accepted' => 'Pagamento rifiutato, riprovare',
        'total.required' => 'Carrello vuoto',
        'total.numeric' => 'Carrello non contiene numeri',
        'total.min' => 'Carrello vuoto, acquistare qualcosa',
        'user_mail.required' => 'Campo richiesto',
        'user_mail.string' => 'User_mail_String',
        'user_mail.email' => 'Inserire il campo email, correttamente',
        'user_mail.max' => 'Superata la soglia massima',
        'user_phone_number.required' => 'Inserire il campo numero di telefono',
        'user_phone_number.max' => 'Superata la soglia massima di 255',
    ];
    public function generate(Request $request)
    {

        // Crea ordine
        $order = new Order();
        $order->user_address = $request->input('user_address');
        $order->customer = $request->input('customer');
        $order->status = $request->input('status');
        $order->total = $request->input('total');
        $order->user_mail = $request->input('user_mail');
        $order->user_phone_number = $request->input('user_phone_number');
        $order->save();
        // Ottenere l'ID del ristorante attraverso la tabella pivot food_items
        $foodItem = FoodItem::find($request->input('food_items')[0]['food_id']);
        $restaurantId = $foodItem->restaurant_id;
        $order->restaurant_id = $restaurantId;

        // Aggiungi i food items all'ordine
        foreach ($request->input('food_items') as $item) {
            $order->foodItems()->attach($item['food_id']);
        }

        return response()->json(['message' => 'Ordine generato con successo', 'order_id' => $order->id], 200);
    }
}
