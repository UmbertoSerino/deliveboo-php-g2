<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    // INDEX
    public function index()
    {
        $restaurants = Restaurant::paginate(10);
        return response()->json([
            'success' => true,
            'results' => $restaurants
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
