<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::where('user_id', Auth::id())->get();
        return view('admin.restaurant.index', compact('restaurants'));
    }

    public function create()
    {
        $restaurant = new Restaurant();
        return view('admin.restaurant.create', compact('restaurant'));
    }

    public function store(Request $request)
    {
        $data = $request
            ->validate([
                'name' => 'required', 'max:100',
                'vat' => 'required', 'numeric', 'min:9', 'max:10',
                'address' => 'required', 'max:300',
                'phone_number' => 'required', 'numeric', 'min:9', 'max:11',
                'email' => 'required', 'email',
                'image_url' => 'nullable'
            ]);
        $data['user_id'] = Auth::id();

        //  dd($data);
        $restaurant = Restaurant::create($data);
        return redirect()->route('admin.restaurant.index', $restaurant);
    }

    public function show(Restaurant $restaurant)
    {
        return view('admin.restaurant.show', compact('restaurant'));
    }
}
