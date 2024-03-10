<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Category;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    // INDEX
    public function index()
    {
        $restaurants = Restaurant::with('categories', 'foodItem', 'user')->paginate(10);
        return response()->json([
            'success' => true,
            'results1' => $restaurants,

        ]);
    }
    // SHOW
    public function show(Restaurant $restaurant)
    {
        return response()->json([
            'success' => true,
            'results' => $restaurant
        ]);
    }
}
