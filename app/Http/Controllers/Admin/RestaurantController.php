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
        $restaurant = Restaurant::where('user_id', Auth::id())->get();
        return view('admin.restaurant.index', compact('restaurant'));
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
                'vat' => 'required', 'numeric', 'min:10', 'max:11',
                'address' => 'required', 'max:300',
                'phone_number' => 'required', 'numeric', 'min:9', 'max:10',
                'email' => 'required', 'email',
                'image_url' => 'nullable'
            ]);
        $data['user_id'] = Auth::id();

        //  dd($data);
        $restaurant = Restaurant::create($data);
        return redirect()->route('admin.restaurants.index', $restaurant);
    }
}
