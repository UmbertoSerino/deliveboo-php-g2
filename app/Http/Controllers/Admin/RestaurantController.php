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
        // Validation
        $data = $request
            ->validate([
                'name' => 'required', 'max:20', 'min:5',
                'vat' => 'required', 'numeric', 'min:10', 'max:11',
                'address' => 'required', 'max:300',
                'phone_number' => 'required', 'numeric', 'min:9', 'max:10',
                'email' => 'required', 'email',
                'image_url' => 'nullable',
                'categories' => 'required',
            ],
            [
                'name.required' => 'Il campo nome è obbligatorio.',
                'name.max' => 'Il campo nome non può superare i 100 caratteri.',
                'vat.required' => 'Il campo partita IVA è obbligatorio.',
                'vat.numeric' => 'La partita IVA deve essere un numero.',
                'vat.min' => 'La partita IVA deve essere composta da almeno 10 cifre.',
                'vat.max' => 'La partita IVA non può superare le 11 cifre.',
                'address.required' => 'Il campo indirizzo è obbligatorio.',
                'address.max' => 'Il campo indirizzo non può superare i 300 caratteri.',
                'phone_number.required' => 'Il campo numero di telefono è obbligatorio.',
                'phone_number.numeric' => 'Il numero di telefono deve essere un numero.',
                'phone_number.min' => 'Il numero di telefono deve essere composto da almeno 9 cifre.',
                'phone_number.max' => 'Il numero di telefono non può superare le 10 cifre.',
                'email.required' => 'Il campo email è obbligatorio.',
                'email.email' => 'Il formato dell\'email non è valido.',
                'image_url.nullable' => 'Il campo URL dell\'immagine deve essere nullo o valido.',
                'categories.required' => 'È richiesta almeno una categoria.',
            ]
        );

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
        $data = $request
            ->validate([
                'name' => 'required','min:5', 'max:20',
                'vat' => 'required', 'numeric', 'min:10', 'max:11',
                'address' => 'required', 'max:300',
                'phone_number' => 'required', 'numeric', 'min:9', 'max:10',
                'email' => 'required', 'email',
                'image_url' => 'nullable',
                'categories' => 'required',
            ],
            [
                'name.required' => 'Il campo nome è obbligatorio.',
                'name.max' => 'Il campo nome non può superare i 100 caratteri.',
                'vat.required' => 'Il campo partita IVA è obbligatorio.',
                'vat.numeric' => 'La partita IVA deve essere un numero.',
                'vat.min' => 'La partita IVA deve essere composta da almeno 10 cifre.',
                'vat.max' => 'La partita IVA non può superare le 11 cifre.',
                'address.required' => 'Il campo indirizzo è obbligatorio.',
                'address.max' => 'Il campo indirizzo non può superare i 300 caratteri.',
                'phone_number.required' => 'Il campo numero di telefono è obbligatorio.',
                'phone_number.numeric' => 'Il numero di telefono deve essere un numero.',
                'phone_number.min' => 'Il numero di telefono deve essere composto da almeno 9 cifre.',
                'phone_number.max' => 'Il numero di telefono non può superare le 10 cifre.',
                'email.required' => 'Il campo email è obbligatorio.',
                'email.email' => 'Il formato dell\'email non è valido.',
                'image_url.nullable' => 'Il campo URL dell\'immagine deve essere nullo o valido.',
                'categories.required' => 'È richiesta almeno una categoria.',
            ]
        );

        $data['user_id'] = Auth::id();

        $data['categories'] = isset($data['categories']) ? $data['categories'] : [];

        $restaurant->update($data);
        $restaurant->categories()->sync($data['categories']);

        return redirect()->route('admin.restaurants.index', $restaurant);
    }
}
