<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Restaurant;
use App\Models\Category;
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
        $categories = Category::all();
        return view('admin.restaurant.create', compact('restaurant', 'categories'));
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
                'image_url' => 'nullable',
                'categories' => 'required',
            ]);
        $data['user_id'] = Auth::id();
        $data['categories'] = isset($data['categories']) ? $data['categories'] : [];

        /* dd($data); */
        $restaurant = Restaurant::create($data);
        $restaurant->categories()->sync($data['categories']);

        return redirect()->route('admin.restaurants.index', $restaurant);
    }

    public function show(Restaurant $restaurant)
    {

        return view('admin.restaurant.show', compact('restaurant'));
    }
}
