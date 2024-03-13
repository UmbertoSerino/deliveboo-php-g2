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
                'restaurant_id' => '1',
                'description' => 'Gustosa pietanza artigianale, ispirata alla tradizione culinaria Italiana.',
                'ingredients' => 'Salsa di pomodoro, aglio, origano, olio extravergine d\'oliva.',
                'price' => 5, 00,
                'image_url' => 'https://www.pizzarecipe.org/wp-content/uploads/2019/01/Pizza-Marinara-2000x1500.jpg',
                'available' => true,
            ],
            [
                'name' => 'Margherita',
                'restaurant_id' => '1',
                'description' => 'Gustosa pietanza artigianale, ispirata alla tradizione culinaria Italiana.',
                'ingredients' => 'Salsa di pomodoro, mozzarella fresca, basilico, olio extravergine d\'oliva.',
                'price' => 6, 00,
                'image_url' => 'https://it.ooni.com/cdn/shop/articles/Margherita-9920.jpg?crop=center&height=800&v=1644590028&width=800',
                'available' => true,

            ],
            [
                'name' => 'Diavola',
                'restaurant_id' => '1',
                'description' => 'Gustosa pietanza artigianale, ispirata alla tradizione culinaria Italiana.',
                'ingredients' => 'Salsa di pomodoro, mozzarella fresca, salame piccante, peperoncino, olio extravergine d\'oliva.',
                'price' => 8, 00,
                'image_url' => 'https://thepizzaheaven.com/wp-content/uploads/2021/07/Pizza-Diavola.jpg',
                'available' => true,

            ],
            [
                'name' => 'Quattro Stagioni',
                'restaurant_id' => '1',
                'description' => 'Pizza divisa in quattro parti, ognuna con un diverso ingrediente rappresentante una stagione.',
                'ingredients' => 'Funghi, prosciutto cotto, carciofi, olive, mozzarella, salsa di pomodoro, origano.',
                'price' => 9.50,
                'image_url' => 'https://www.insidetherustickitchen.com/wp-content/uploads/2021/02/Quattro-stagioni-pizza-1200px.jpg',
                'available' => true,

            ],
            [
                'name' => 'Capricciosa',
                'restaurant_id' => '1',
                'description' => 'Pizza ricca e saporita con una varietà di ingredienti assortiti.',
                'ingredients' => 'Funghi, prosciutto cotto, carciofi, olive, mozzarella, salsa di pomodoro, origano.',
                'price' => 10.00,
                'image_url' => 'https://madeinsud.co.uk/wp-content/uploads/2020/04/Web-Cap-1024x1024.jpg',
                'available' => true,

            ],
            [
                'name' => 'Prosciutto e Funghi',
                'restaurant_id' => '1',
                'description' => 'Pizza classica con prosciutto cotto e funghi.',
                'ingredients' => 'Prosciutto cotto, funghi, mozzarella, salsa di pomodoro, origano.',
                'price' => 8.50,
                'image_url' => 'https://www.newcroco.ro/image/cache/catalog/Prosciutto%20E%20Funghi%20(1600)-1000x700.jpg',
                'available' => false,

            ],
            [
                'name' => 'Frutti di Mare',
                'restaurant_id' => '1',
                'description' => 'Pizza con una varietà di frutti di mare freschi.',
                'ingredients' => 'Frutti di mare (cozze, vongole, gamberi, calamari), mozzarella, salsa di pomodoro, prezzemolo, aglio.',
                'price' => 12.00,
                'image_url' => 'https://www.mashed.com/img/gallery/best-frutti-di-mare-recipe/l-intro-1627412312.jpg',
                'available' => true,

            ],
            [
                'name' => 'Vegetariana',
                'restaurant_id' => '1',
                'description' => 'Pizza vegetariana con una selezione di verdure fresche.',
                'ingredients' => 'Peperoni, melanzane, zucchine, pomodori, cipolle, mozzarella, salsa di pomodoro, origano.',
                'price' => 9.00,
                'image_url' => 'https://recetasveganas.net/wp-content/uploads/2018/07/receta-vegetariana-facil-pasta-verduras-tofu-2.jpg',
                'available' => false,

            ],
            [
                'name' => 'Calzone',
                'restaurant_id' => '1',
                'description' => 'Pizza chiusa a mezzaluna, ripiena di ingredienti a scelta.',
                'ingredients' => 'Prosciutto cotto, funghi, mozzarella, salsa di pomodoro, origano.',
                'price' => 10.50,
                'image_url' => 'https://www.happyfoodstube.com/wp-content/uploads/2016/03/calzone-pizza-recipe.jpg',
                'available' => true,

            ],
            [
                'name' => 'Carbonara',
                'restaurant_id' => '1',
                'description' => 'Pizza ispirata alla famosa pasta alla carbonara, con pancetta, uovo e formaggio.',
                'ingredients' => 'Pancetta, uovo, pecorino romano, mozzarella, pepe nero, salsa di pomodoro, origano.',
                'price' => 11.00,
                'image_url' => 'https://static.cookist.it/wp-content/uploads/sites/21/2021/04/carbonara-ba-ghetto.jpg',
                'available' => true,

            ],
            [
                'name' => 'Tonno e Cipolla',
                'restaurant_id' => '1',
                'description' => 'Pizza con tonno in scatola e cipolla rossa.',
                'ingredients' => 'Tonno in scatola, cipolla rossa, mozzarella, salsa di pomodoro, origano.',
                'price' => 8.50,
                'image_url' => 'https://viverepiusani.it/wp-content/uploads/2018/06/ricetta-panino-al-tonno.jpg',
                'available' => false,

            ],
            [
                'name' => 'Fressella Bufalina',
                'restaurant_id' => '1',
                'description' => 'Pizza con mozzarella di bufala fresca e pomodoro San Marzano.',
                'ingredients' => 'Mozzarella di bufala, pomodoro San Marzano, basilico, olio extravergine d\'oliva.',
                'price' => 10.50,
                'image_url' => 'https://static.wixstatic.com/media/12f2a4_c21e654711414881ae3abafec8e5685c~mv2.jpg/v1/fit/w_1024,h_1029,al_c,q_80/file.jpg',
                'available' => true,

            ],
            [
                'name' => 'Pasta al Pesto',
                'restaurant_id' => '1',
                'description' => 'Pizza condita con pesto alla genovese e pomodori ciliegino.',
                'ingredients' => 'Pesto alla genovese, pomodori ciliegino, mozzarella, olio extravergine d\'oliva.',
                'price' => 9.50,
                'image_url' => 'https://www.nutritiouseats.com/wp-content/uploads/2011/06/Pesto-Pasta-close-up-0883.jpg',
                'available' => true,

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
            $newFoodItem->available = $foodItem['available'];
            $newFoodItem->save();
        }
    }
}
