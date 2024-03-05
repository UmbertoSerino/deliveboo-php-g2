<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'La regina margherita',
                'vat' => 123456789,
                'address' => 'via dei Pollicini, Santa Maria Capua Vetere (CE)',
                'phone_number' => 348945687,
                'email' => 'ma_che_dici@gmail.com',
                'image_url' => 'https://img.ilgcdn.com/sites/default/files/styles/xl/public/foto/2019/12/29/1577604943-marghe.jpg?_=1577604943',
            ]
        ];
        foreach ($restaurants as $restaurant) {
            $newRestaurants = new Restaurant();
            $newRestaurants->name = $restaurant['name'];
            $newRestaurants->vat = $restaurant['vat'];
            $newRestaurants->address = $restaurant['address'];
            $newRestaurants->phone_number = $restaurant['phone_number'];
            $newRestaurants->email = $restaurant['email'];
            $newRestaurants->image_url = $restaurant['image_url'];
            $newRestaurants->save();
        }
    }
}
