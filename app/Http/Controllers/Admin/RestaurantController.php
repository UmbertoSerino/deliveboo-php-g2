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
        $user = Auth::user();
        if ($user->restaurant !== null) {
            return redirect()->route('admin.restaurants.index');
        }
        $restaurant = new Restaurant();
        $categories = Category::all();
        return view('admin.restaurant.create', compact('restaurant', 'categories'));
    }

    public function store(Request $request)
    {
        // Validation
        // dd($request);
        $data = $request->validate([
            'name' => ['required', 'min:2', 'max:20'],
            'vat' => ['required', 'numeric', 'digits:12'],
            'address' => ['required', 'max:255'],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'image_url' => ['required'],
            'categories' => ['required'],
        ], [
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.min' => 'Il campo nome deve essere di almeno 5 caratteri.',
            'name.max' => 'Il campo nome non può superare i 20 caratteri.',
            'vat.required' => 'Il campo partita IVA è obbligatorio.',
            'vat.numeric' => 'Il campo partita IVA deve essere un numero.',
            'vat.digits' => 'La partita IVA deve essere composta da 11 cifre.',
            'address.required' => 'Il campo indirizzo è obbligatorio.',
            'address.max' => 'Il campo indirizzo non può superare i 255 caratteri.',
            'phone_number.required' => 'Il campo numero di telefono è obbligatorio.',
            'phone_number.numeric' => 'Il numero di telefono deve essere un numero.',
            'phone_number.digits_between' => 'Il numero di telefono deve essere composto da 9 o 10 cifre.',
            'email.required' => 'Il campo email è obbligatorio.',
            'email.email' => 'Il formato dell\'email non è valido.',
            'image_url.required' => 'Il campo URL dell\'immagine è obbligatorio.',
            'categories.required' => 'È richiesta almeno una categoria.',
        ]);

        //Query Select  
        $data['user_id'] = Auth::id();

        $data['categories'] = isset($data['categories']) ? $data['categories'] : [];

        //Query Select  
        $restaurant = Restaurant::create($data);
        $restaurant->categories()->sync($data['categories']);

        // Redirect View
        return redirect()->route('admin.restaurants.index', $restaurant);
    }

    public function show(Restaurant $restaurant)
    {

        // Redirect View
        return view('admin.restaurant.show', compact('restaurant'));
    }

    public function edit(Restaurant $restaurant)
    {
        //Query Select  
        $categories = Category::all();
        // Redirect View
        return view('admin.restaurant.edit', compact('restaurant', 'categories'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $data = $request->validate([
            'name' => ['required', 'min:2', 'max:20'],
            'vat' => ['required', 'numeric', 'digits:12'],
            'address' => ['required', 'max:255'],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'image_url' => ['required'],
            'categories' => ['required'],
        ], [
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.min' => 'Il campo nome deve essere di almeno 5 caratteri.',
            'name.max' => 'Il campo nome non può superare i 20 caratteri.',
            'vat.required' => 'Il campo partita IVA è obbligatorio.',
            'vat.numeric' => 'Il campo partita IVA deve essere un numero.',
            'vat.digits' => 'La partita IVA deve essere composta da 11 cifre.',
            'address.required' => 'Il campo indirizzo è obbligatorio.',
            'address.max' => 'Il campo indirizzo non può superare i 255 caratteri.',
            'phone_number.required' => 'Il campo numero di telefono è obbligatorio.',
            'phone_number.numeric' => 'Il numero di telefono deve essere un numero.',
            'phone_number.digits_between' => 'Il numero di telefono deve essere composto da 9 o 10 cifre.',
            'email.required' => 'Il campo email è obbligatorio.',
            'email.email' => 'Il formato dell\'email non è valido.',
            'image_url.required' => 'Il campo URL dell\'immagine è obbligatorio.',
            'categories.required' => 'È richiesta almeno una categoria.',
        ]);


        $data['user_id'] = Auth::id();

        $data['categories'] = isset($data['categories']) ? $data['categories'] : [];

        $restaurant->update($data);
        $restaurant->categories()->sync($data['categories']);

        return redirect()->route('admin.restaurants.index', $restaurant);
    }
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('admin.restaurants.index');
    }
}
