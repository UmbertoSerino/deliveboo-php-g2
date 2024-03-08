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
    private $rules = [
        'title' => ['required', 'min:3', 'string', 'max:255'],
        'category_id' => ['exists:categories,id'],
        'tags' => ['exists:tags,id'],
        'post_image' => ['image', 'required'],
        'content' => ['min:20', 'required'],
        'date' => ['date', 'required'],
    ];


    public function index()
    {
        $user = Auth::user()->id;
        /* $foodItems = FoodItem::where();
        $posts = Post::where('user_id', Auth::id())->orderBy('date')->get(); */

        $foodItems = FoodItem::where('restaurant_id', $user)->get();
        /* $foodItems = FoodItem::getTable('food_items')->where('restaurant_id', $user)->get(); */
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

    public function edit(FoodItem $foodItems)
    {
        $fooditem = FoodItem::all();
        return view('admin.fooditems.edit', compact('fooditem'));
    }

    // public function update(Request $request, FoodItem $foodItems)
    // {
    //     $data = $request->validate($this->rules);
    //     // $post->user_id = Auth::id();
    //     $data['fooditem_id'] = Auth::id();

    //     if (!isset($data['tags'])){
    //         $data['tags'] = [];
    //     }


    //     $foodItem->update($data);

    //     return redirect()->route('admin.fooditems.show', $foodItem)->with('message', $foodItem->name . ' has been updated succesfully!')->with('alert-class', 'success');
    // }
    public function update (Request $request, FoodItem $foodItems)
    {
        //
        $data = $request->all();
        if (!isset($data['categories'])){
            $data['categories'] = [];
        }

        $fooditems->update($data);

        // $fooditems->fooditems()->sync($data['fooditems']);
        return redirect()->route('admin.fooditems.show',compact('fooditems'));

    }
}
