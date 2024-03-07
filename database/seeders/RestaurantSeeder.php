<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\User;
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
                'user_id' => 1,
                'vat' => 123456789,
                'address' => 'via dei Pollicini, Santa Maria Capua Vetere (CE)',
                'phone_number' => 348945687,
                'email' => 'ma_che_dici@gmail.com',
                'image_url' => 'https://img.ilgcdn.com/sites/default/files/styles/xl/public/foto/2019/12/29/1577604943-marghe.jpg?_=1577604943',
            ],
            [
                'name' => 'Il Pizzaiuolo',
                'user_id' => 2,
                'vat' => 987654321,
                'address' => 'Via Napoli, 123, Napoli (NA)',
                'phone_number' => 348123456,
                'email' => 'ilpizzaiuolo@gmail.com',
                'image_url' => 'https://www.ilpizzaiuolo.it/wp-content/uploads/2020/03/il-pizzaiuolo-1.jpg',
            ],
            [
                'name' => 'Ristorante da Gino',
                'user_id' => 3,
                'vat' => 654321987,
                'address' => 'Piazza Garibaldi, 1, Roma (RM)',
                'phone_number' => 333987654,
                'email' => 'ristorantedagino@gmail.com',
                'image_url' => 'https://media-cdn.tripadvisor.com/media/photo-s/1a/8f/71/fb/ristorante-da-gino.jpg',
            ],
            [
                'name' => 'Trattoria Nonna Maria',
                'user_id' => 4,
                'vat' => 147258369,
                'address' => 'Via Toscana, 5, Firenze (FI)',
                'phone_number' => 333456789,
                'email' => 'nonnamaria@yahoo.it',
                'image_url' => 'https://media-cdn.tripadvisor.com/media/photo-s/0a/43/45/29/trattoria-nonna-maria.jpg',
            ],
            [
                'name' => 'Osteria del Pescatore',
                'user_id' => 5,
                'vat' => 369852147,
                'address' => 'Lungomare, 10, Bari (BA)',
                'phone_number' => 333123456,
                'email' => 'osteriadelpescatore@hotmail.com',
                'image_url' => 'https://media-cdn.tripadvisor.com/media/photo-s/18/4e/b8/44/osteria-del-pescatore.jpg',
            ],
        ];

        foreach ($restaurants as $restaurant) {
            $newRestaurants = new Restaurant();
            $newRestaurants->name = $restaurant['name'];
            $newRestaurants->user_id = $restaurant['user_id'];
            $newRestaurants->vat = $restaurant['vat'];
            $newRestaurants->address = $restaurant['address'];
            $newRestaurants->phone_number = $restaurant['phone_number'];
            $newRestaurants->email = $restaurant['email'];
            $newRestaurants->image_url = $restaurant['image_url'];
            $newRestaurants->save();
        }
    }
}
