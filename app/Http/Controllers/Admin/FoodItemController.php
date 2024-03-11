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
    private  $rules = [
        'name' => ['required', 'string', 'max:255'],
        'restaurant_id' => ['required', 'exists:restaurants,id'],
        'description' => ['required', 'string'],
        'ingredients' => ['required', 'string'],
        'price' => ['required', 'numeric', 'min:0', 'digits_between:1,199'],
        'image_url' => ['required', 'url'],
    ];

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
        return view('admin.fooditems.create', compact('foodItem', 'restaurant') );
    }

    public function store(Request $request)
    {
        $foodItemData = $request->all();
        $foodItem = FoodItem::create($foodItemData);

        return redirect()->route('admin.fooditems.index');
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


    public function update (Request $request, FoodItem $fooditem)
    {
        
        $data = $request->validate($this->rules);
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
