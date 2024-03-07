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
        $foodItems = FoodItem::all();
        $restaurants = Restaurant::all();
        return view('admin.fooditems.index', compact('foodItems', 'restaurants'));
    }
    public function create()
    {
        $restaurant = Auth::user()->restaurant;
        return view('admin.fooditems.create', compact('restaurant'));
    }

    public function store(Request $request)
    {

        $foodItemData = $request->all();
        $foodItem = new FoodItem();
        $foodItem->fill($foodItemData);
        $foodItem->save();
        return redirect()->route('admin.fooditems.index');
    }

    public function show(FoodItem $foodItems)
    {
        return view('admin.fooditems.index', compact('foodItem'));
    }

    public function edit(Restaurant $restaurant)
    {
        $categories = Category::all();
        return view('admin.restaurants.edit', compact('restaurant', 'categories'));
    }
}
