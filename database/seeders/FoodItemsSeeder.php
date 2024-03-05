<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\FoodItem;
use Illuminate\Database\Seeder;

class FoodItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foodItems = [
            [
                'name' => 'Marinara',
                'restaurant_id' => '0',
                'description' => 'Gustosa pietanza artigianale, ispirata alla tradizione culinaria Italiana.',
                'ingredients' => 'Salsa di pomodoro, aglio, origano, olio extravergine d\'oliva.',
                'price' => 5, 00,
                'image_url' => 'https://www.pizzarecipe.org/wp-content/uploads/2019/01/Pizza-Marinara-2000x1500.jpg',
            ],
            [
                'name' => 'Margherita',
                'restaurant_id' => '0',
                'description' => 'Gustosa pietanza artigianale, ispirata alla tradizione culinaria Italiana.',
                'ingredients' => 'Salsa di pomodoro, mozzarella fresca, basilico, olio extravergine d\'oliva.',
                'price' => 6, 00,
                'image_url' => 'https://it.ooni.com/cdn/shop/articles/Margherita-9920.jpg?crop=center&height=800&v=1644590028&width=800',
            ],
            [
                'name' => 'Diavola',
                'restaurant_id' => '0',
                'description' => 'Gustosa pietanza artigianale, ispirata alla tradizione culinaria Italiana.',
                'ingredients' => 'Salsa di pomodoro, mozzarella fresca, salame piccante, peperoncino, olio extravergine d\'oliva.',
                'price' => 8, 00,
                'image_url' => 'https://thepizzaheaven.com/wp-content/uploads/2021/07/Pizza-Diavola.jpg',
            ],
        ];

        foreach ($foodItems as $foodItem) {
            $newFoodItem = new FoodItem();

            $newFoodItem->name = $foodItem['name'];
            $newFoodItem->restaurant_id = $foodItem['restaurant_id'];
            $newFoodItem->description = $foodItem['description'];
            $newFoodItem->ingredients = $foodItem['ingredients'];
            $newFoodItem->price = $foodItem['price'];
            $newFoodItem->image_url = $foodItem['image_url'];
            $newFoodItem->save();
        }
    }
}
