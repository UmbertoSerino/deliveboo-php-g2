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
                'name' => 'Il Mirò',
                'user_id' => 2,
                'vat' => 987654321,
                'address' => 'Via Napoli, 123, Napoli (NA)',
                'phone_number' => 348123456,
                'email' => 'ilpizzaiuolo@gmail.com',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFr7jukhT0wE92VugncMhRH3qiAR1DdHXmYw&usqp=CAU',
            ],
            [
                'name' => 'Ristorante da Gino',
                'user_id' => 3,
                'vat' => 654321987,
                'address' => 'Piazza Garibaldi, 1, Roma (RM)',
                'phone_number' => 333987654,
                'email' => 'ristorantedagino@gmail.com',
                'image_url' => 'https://www.paninotecadagino.it/wp-content/uploads/2021/04/cd8f7ca2-d291-4339-98d5-070b55732668.jpg',
            ],
            [
                'name' => 'Trattoria Nonna Maria',
                'user_id' => 4,
                'vat' => 147258369,
                'address' => 'Via Toscana, 5, Firenze (FI)',
                'phone_number' => 333456789,
                'email' => 'nonnamaria@yahoo.it',
                'image_url' => 'https://static.wixstatic.com/media/c0df87_4a30ab5def3c4db7a9316aa1899f3c79~mv2.jpg/v1/fill/w_560,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/c0df87_4a30ab5def3c4db7a9316aa1899f3c79~mv2.jpg',
            ],
            [
                'name' => 'Osteria del Pescatore',
                'user_id' => 5,
                'vat' => 369852147,
                'address' => 'Lungomare, 10, Bari (BA)',
                'phone_number' => 333123456,
                'email' => 'osteriadelpescatore@hotmail.com',
                'image_url' => 'https://www.amioparere.com/images/locali/6b7d-fronte.jpg',
            ],
            [
                'name' => 'Ristorante La Dolce Vita',
                'user_id' => 6,
                'vat' => 123456789,
                'address' => 'Lungomare, 10, Roccaraso (AQ)',
                'phone_number' => 2123456789,
                'email' => 'info@ladolcevita.com',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK9Ts4sV4MpSIGUNKBSfOkP7h0jI18hrkpX17hS5T4Ew&s',
            ],

            [
                'name' => 'Bella Napoli',
                'user_id' => 7,
                'vat' => 23456789012,
                'address' => 'Via Napoli, 2, Napoli, (NA)',
                'phone_number' => 3123456789,
                'email' => 'info@bellanapoli.com',
                'image_url' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/29/f6/35/logo.jpg',
            ],
            [
                'name' => 'Osteria Del Sole',
                'user_id' => 8,
                'vat' => 34567890123,
                'address' => 'Via Solferino, 20, Milano (MI)',
                'phone_number' => 4123456789,
                'email' => 'info@osteriadelsole.com',
                'image_url' => 'https://static.wixstatic.com/media/7d45ca_9d9550c8371f42de8d6de8d52f30c9a2~mv2.png/v1/fit/w_2500,h_1330,al_c/7d45ca_9d9550c8371f42de8d6de8d52f30c9a2~mv2.png',
            ],
            [
                'name' => 'Mi Piace',
                'user_id' => 9,
                'vat' => 45678901234,
                'address' => 'Via Garibaldi, 30, Torino (TO)',
                'phone_number' => 5123456789,
                'email' => 'info@mipiace.com',
                'image_url' => 'https://media-cdn.tripadvisor.com/media/photo-s/28/9f/a0/f5/logo.jpg',
            ],
            [
                'name' => 'Pizzeria Buon Gusto',
                'user_id' => 10,
                'vat' => 56789012345,
                'address' => 'Via Mazzini, 40, Firenze (FI)',
                'phone_number' => 6123456789,
                'email' => 'info@buongusto.com',
                'image_url' => 'https://play-lh.googleusercontent.com/KDOLyiJ37gM_YLXf6H0xOFgW7lJ_SvJx-wIXBrd79ANF51wEH_WdtmhOaJ0Cn15Szg',
            ],
            [
                'name' => 'Ristorante La Perla',
                'user_id' => 11,
                'vat' => 67890123456,
                'address' => 'Corso Vittorio Emanuele, 50, Palermo (PA)',
                'phone_number' => 7123456789,
                'email' => 'info@laperla.com',
                'image_url' => 'https://media.licdn.com/dms/image/C4E1BAQGrdTth5TM9sg/company-background_10000/0/1584439184185/hotel_ristorante_la_perla_cover?e=2147483647&v=beta&t=VbEcDAN1tYcH9b0C927RjsyDiMEbyIIfw-hX9Olh8gk',
            ],
            [
                'name' => 'Sapore di Bali',
                'user_id' => 12,
                'vat' => 23456789012,
                'address' => 'Via Caravaggio, 10, Torino (TO)',
                'phone_number' => 572345678,
                'email' => 'info@saporedisole.com',
                'image_url' => 'https://img.freepik.com/premium-vector/indian-restaurant-logo-design-inspiration_57043-225.jpg',
            ],
            [
                'name' => 'Ginlilla',
                'user_id' => 13,
                'vat' => 34567890123,
                'address' => 'Via delle Palme, 12, Milano (MI)',
                'phone_number' => 673456789,
                'email' => 'info@ginlilla.com',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAy3kG7r7cku7dPFvFZTC6QOGsl8ROdAARng5fUONUNk3UnNgZQTWxOJLcdzg-1w69_z8&usqp=CAU',
            ],
            [
                'name' => 'Luna',
                'user_id' => 14,
                'vat' => 45678901234,
                'address' => 'Via della Luna, 20, Venezia (VE)',
                'phone_number' => 772345678,
                'email' => 'info@luna.com',
                'image_url' => 'https://vrconcierge.com/wp-content/uploads/2022/04/luna-ristorante-concord-ca-logo-1.jpg',
            ],
            [
                'name' => 'Eden',
                'user_id' => 15,
                'vat' => 56789012345,
                'address' => 'Via del Paradiso, 5, Firenze (FI)',
                'phone_number' => 872345678,
                'email' => 'info@eden.com',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTysu_ybPBoizSQCMFwVP7lDe8fpnomcdpy7Q&usqp=CAU',
            ],
            [
                'name' => 'Aroma del Deserto',
                'user_id' => 16,
                'vat' => 67890123456,
                'address' => 'Via delle Sabbie, 3, Torino (TO)',
                'phone_number' => 972345678,
                'email' => 'info@aroma.com',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStxS658pj3Fe5O6LdWX801w9UELcbPJFzOhg&usqp=CAU',
            ],

            [
                'name' => 'Curcuma',
                'user_id' => 17,
                'vat' => 89012345678,
                'address' => 'Via delle Palme, 7, Bologna (BO)',
                'phone_number' => 572345679,
                'email' => 'info@curcuma.com',
                'image_url' => 'https://www.zilliondesigns.com/images/portfolio/indian-restaurant/indian-restaurant-03.png',
            ],
            [
                'name' => 'Aiko',
                'user_id' => 18,
                'vat' => 23456789013,
                'address' => 'Via dei Ciliegi, 18, Roma (RM)',
                'phone_number' => 282345679,
                'email' => 'info@akio.com',
                'image_url' => 'https://media-cdn.tripadvisor.com/media/photo-s/1f/d8/05/82/aiko-fatto-con-amore.jpg',
            ],
            [
                'name' => 'Siam Thai',
                'user_id' => 19,
                'vat' => 34567890124,
                'address' => 'Lungomare, 10, Palermo (PA)',
                'phone_number' => 873456679,
                'email' => 'info@siamthai.com',
                'image_url' => 'https://www.cityofardenhills.org/ImageRepository/Document?documentID=4633',
            ],
            [
                'name' => 'Moonlight Cuisine',
                'user_id' => 20,
                'vat' => 45678901235,
                'address' => 'Via della Luna, 7, Bari (BA)',
                'phone_number' => 973456679,
                'email' => 'info@moonlight.com',
                'image_url' => 'https://cdn.dribbble.com/userupload/10300668/file/original-7b3cf07eddd195a35ae8e6e96867be12.jpg',
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
