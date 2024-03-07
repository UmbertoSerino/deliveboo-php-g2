<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FoodItem;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodItemController extends Controller
{
    public function index()
    {
        $foodItems = FoodItem::all();
        return view('admin.restaurant.show', compact('foodItems'));
    }

    public function create()
    {
        $foodItem = new FoodItem();
        return view('admin.fooditem.create', compact('foodItem'));
    }

    public function store(Request $request, FoodItem $foodItem)
    {
        $data = $request
            ->validate([
                'name' => 'required', 'max:100',
                'description' => 'required', 'max:300',
                'ingridients' => 'required', 'numeric', 'min:9', 'max:11',
                'price' => 'required', 'decimal',
                'image_url' => 'nullable'
            ]);
        $data['user_id'] = Auth::id();
        // dd($data);
        $foodItem = $foodItem->create($data);
        return redirect()->route('admin.restaurants.show', $foodItem->id);
    }

    public function show(Restaurant $restaurant)
    {
        return view('admin.fooditems.show', compact('restaurant'));
    }

    public function edit(Restaurant $restaurant)
    {
        $categories = Category::all();
        return view('admin.restaurants.edit', compact('restaurant', 'categories'));
    }
}
