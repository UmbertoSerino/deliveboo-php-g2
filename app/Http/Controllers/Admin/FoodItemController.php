<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FoodItem;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodItemController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        /* $foodItems = FoodItem::where();
        $posts = Post::where('user_id', Auth::id())->orderBy('date')->get(); */

        $foodItems = FoodItem::where('restaurant_id', $user)->get();
        /* $foodItems = FoodItem::getTable('food_items')->where('restaurant_id', $user)->get(); */
        $restaurants = Restaurant::all();
        return view('admin.fooditems.index', compact('foodItems', 'restaurants'));
    }
    public function create()
    {
        $foodItem = new FoodItem();
        $restaurant = Auth::user()->restaurant;
        // dd($foodItem);    
        return view('admin.fooditems.create', compact('foodItem', 'restaurant'));
    }

    public function store(Request $request)
    {
        $price = str_replace(',', '.', $request->price);
        $request->merge(['price' => $price]);
        $foodItemData = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'restaurant_id' => ['required', 'exists:restaurants,id'],
                'description' => ['required', 'string', 'min:10', 'max:255'],
                'ingredients' => ['required', 'string', 'min:10', 'max:255'],
                'price' => ['required', 'numeric', 'between:1.00,199.99'],
                'image_url' => ['required', 'url'],
            ],
            [
                'name.required' => 'Campo richiesto, inserisci il nome del piatto.',
                'name.max' => 'Superato il numero massimo di 255 caratteri, si prega di ridurre il  numero.',
                'description' => 'Inserisci una descrizione tra i 10 ed i 255 caratteri.',
                'ingredients' => 'Inserisci ingredienti, almeno 10 caratteri, massimo 255 caratteri.',
                'price' => 'inserisci un valore tra 1 e 199.',
                'image_url' => 'inserisci un immagine di tipo url'
            ]
        );
        $foodItem = FoodItem::create($foodItemData);

        return redirect()->route('admin.fooditems.index', $foodItem);
    }

    public function show(string $id)
    {
        $foodItem = FoodItem::findOrFail($id);
        return view('admin.fooditems.show', compact('foodItem'));
    }

    public function edit(string $id)
    {
        $foodItem = FoodItem::findOrFail($id);
        $restaurant = Auth::user()->restaurant;

        return view('admin.fooditems.edit', compact('foodItem', 'restaurant'));
    }


    public function update(Request $request, FoodItem $fooditem)
    {
        $price = str_replace(',', '.', $request->price);
        $request->merge(['price' => $price]);
        $data = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'restaurant_id' => ['required', 'exists:restaurants,id'],
                'description' => ['required', 'string', 'min:10', 'max:255'],
                'ingredients' => ['required', 'string', 'min:10', 'max:255'],
                'price' => ['required', 'numeric', 'between:1.00,199.99'],
                'image_url' => ['required', 'url'],
            ],
            [
                'name.required' => 'Campo richiesto, inserisci il nome del piatto.',
                'name.max' => 'Superato il numero massimo di 255 caratteri, si prega di ridurre il  numero.',
                'description' => 'Inserisci una descrizione tra i 10 ed i 255 caratteri.',
                'ingredients' => 'Inserisci ingredienti, almeno 10 caratteri, massimo 255 caratteri.',
                'price' => 'inserisci un valore tra 1 e 199.',
                'image_url' => 'inserisci un immagine di tipo url'
            ]
        );
        $fooditem->update($data);
        $restaurant = Auth::user()->restaurant;

        return redirect()->route('admin.fooditems.show', compact('fooditem', 'restaurant'));
    }

    public function destroy(string $id)
    {
        $foodItem = FoodItem::findOrFail($id);
        $foodItem->delete();

        return redirect()->route('admin.fooditems.index');
    }
}
