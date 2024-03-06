<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurant = Restaurant::all();
        return view('admin.restaurant.index', compact('restaurant'));
    }
    public function create()
    {
        $restaurant = new Restaurant();
        return view('admin.restaurant.create', compact('restaurant'));
    }
    public function store(Request $request)
    {
        $restaurant = new Restaurant();
        return redirect()->route('admin.restaurant.index', compact('restaurant'));
    }
}
