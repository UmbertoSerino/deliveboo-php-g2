<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;

class FoodItemController extends Controller
{
    //
        // INDEX
        public function index()
        {
            $foodItems = FoodItem::all();
            return response()->json([
                'success' => true,
                'results' => $foodItems,
    
            ]);
        }
        // SHOW
        public function show(FoodItem $foodItem)
        {
            return response()->json([
                'success' => true,
                'results' => $foodItem,
            ]);
        }
    
}
