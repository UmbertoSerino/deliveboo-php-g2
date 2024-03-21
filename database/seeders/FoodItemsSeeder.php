<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\FoodItem;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

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
            [
                'name' => 'Salsiccia e friarielli',
                'restaurant_id' => '6',
                'description' => 'Gustoso piatto di salsiccia e friarielli.',
                'ingredients' => 'Salsiccia e friarielli.',
                'price' => 49.50,
                'image_url' => 'https://1.bp.blogspot.com/-vyOgunrdc08/X8OsDjHVYKI/AAAAAAAAgQQ/dg3NG7m0leUN4Davzd3xHxn_VzD8gsTdQCLcBGAsYHQ/s2048/salsicce%2Be%2Bfriarielli%2Bricette%2Bbarbare_.jpg',
                'available' => true,

            ],
            [
                'name' => 'Papera patate',
                'restaurant_id' => '2',
                'description' => 'Pizza con mozzarella di bufala fresca e pomodoro San Marzano.',
                'ingredients' => 'Mozzarella di bufala, pomodoro San Marzano, basilico, olio extravergine d\'oliva.',
                'price' => 10.50,
                'image_url' => 'https://www.gamberorosso.it/wp-content/uploads/yard-gnocchi-di-patate-al-ragu-di-cavallo-1024x757.jpg',
                'available' => true
            ],
            [
                'name' => 'Cinghiale alla brace',
                'restaurant_id' => '2',
                'description' => 'Cinghiala condita con pesto alla genovese e pomodori ciliegino.',
                'ingredients' => 'Pesto alla genovese, pomodori ciliegino, mozzarella, olio extravergine d\'oliva.',
                'price' => 9.50,
                'image_url' => 'https://www.donnamoderna.com/content/uploads/2023/05/cinghiale-alla-brace_800_resize.jpg',
                'available' => true

            ],
            [
                'name' => 'Zuppa Osaki',
                'restaurant_id' => '3',
                'description' => 'Pizza con mozzarella di bufala fresca e pomodoro San Marzano.',
                'ingredients' => 'Mozzarella di bufala, pomodoro San Marzano, basilico, olio extravergine d\'oliva.',
                'price' => 10.50,
                'image_url' => 'https://www.konnichiwarestaurant.com/wp-content/uploads/2019/09/zuppa-di-miso-misoshiru.jpg',
                'available' => false

            ],
            [
                'name' => 'Sushi Blu',
                'restaurant_id' => '3',
                'description' => 'Cinghiala condita con pesto alla genovese e pomodori ciliegino.',
                'ingredients' => 'Pesto alla genovese, pomodori ciliegino, mozzarella, olio extravergine d\'oliva.',
                'price' => 9.50,
                'image_url' => 'https://img.theculturetrip.com/1440x/smart/wp-content/uploads/2020/02/p3wdfm-1.jpg',
                'available' => true

            ],
            [
                'name' => 'Cous Cous',
                'restaurant_id' => '4',
                'description' => 'Pizza con mozzarella di bufala fresca e pomodoro San Marzano.',
                'ingredients' => 'Mozzarella di bufala, pomodoro San Marzano, basilico, olio extravergine d\'oliva.',
                'price' => 10.50,
                'image_url' => 'https://www.funandfood.it/wp-content/uploads/2019/04/CousCousVeg_2.jpg',
                'available' => true

            ],
            [
                'name' => 'Tajin MArrakech',
                'restaurant_id' => '4',
                'description' => 'Cinghiala condita con pesto alla genovese e pomodori ciliegino.',
                'ingredients' => 'Pesto alla genovese, pomodori ciliegino, mozzarella, olio extravergine d\'oliva.',
                'price' => 9.50,
                'image_url' => 'https://ohmydish.com/wp-content/uploads/2020/03/Chicken-tagine.jpg',
                'available' => true

            ],
            [
                'name' => 'Spaghetti alle Vongole',
                'restaurant_id' => '5',
                'description' => 'Piatto di pasta con vongole fresche e aglio.',
                'ingredients' => 'Spaghetti, vongole, aglio, prezzemolo, peperoncino, olio extravergine d\'oliva.',
                'price' => 12.50,
                'image_url' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2022/05/primi-piatti-pesce-ricette.jpg',
                'available' => false

            ],
            [
                'name' => 'Fritto Misto di Mare',
                'restaurant_id' => '5',
                'description' => 'Assortimento di fritture di pesce misto.',
                'ingredients' => 'Calamari, gamberi, triglie, alice, olio di semi per friggere, sale.',
                'price' => 15.00,
                'image_url' => 'https://orderisda.org/wp-content/uploads/2021/02/iStock-874919294-1024x683.jpg',
                'available' => true

            ],
            [
                'name' => 'Grigliata di Pesce',
                'restaurant_id' => '5',
                'description' => 'Assortimento di pesce grigliato.',
                'ingredients' => 'Spigola, orata, gamberoni, calamari, olio extravergine d\'oliva, sale, pepe.',
                'price' => 18.00,
                'image_url' => 'http://www.trattorialasorgente.it/sites/default/files/grigliata_pesce_2_piatto.jpg',
                'available' => true

            ],
            [
                'name' => 'Carpaccio di Tonno',
                'restaurant_id' => '5',
                'description' => 'Fettine sottili di tonno crudo marinato.',
                'ingredients' => 'Tonno fresco, limone, olio extravergine d\'oliva, sale, pepe, rucola, pomodorini.',
                'price' => 14.00,
                'image_url' => 'https://www.ecucina.eu/site/wp-content/uploads/2016/08/IMG_5800.jpg',
                'available' => true

            ],
            [
                'name' => 'Risotto ai Frutti di Mare',
                'restaurant_id' => '5',
                'description' => 'Risotto con frutti di mare misti.',
                'ingredients' => 'Riso carnaroli, cozze, vongole, gamberi, pomodoro, cipolla, vino bianco, olio extravergine d\'oliva, prezzemolo.',
                'price' => 16.00,
                'image_url' => 'https://www.agrodolce.it/app/uploads/2014/07/IMG_3848-980x732.jpg',
                'available' => true

            ],
            [
                'name' => 'Salmone alla Griglia',
                'restaurant_id' => '5',
                'description' => 'Filetto di salmone grigliato.',
                'ingredients' => 'Salmone fresco, limone, olio extravergine d\'oliva, sale, pepe.',
                'price' => 17.00,
                'image_url' => 'https://www.scuolatessieri.it/wp-content/uploads/2015/12/Secondi-Piatti-Pesce-a-Scuola-Tessieri.jpg',
                'available' => true

            ],
            [
                'name' => 'Insalata di Mare',
                'restaurant_id' => '5',
                'description' => 'Insalata mista di frutti di mare.',
                'ingredients' => 'Mazzancolle, gamberetti, polipo, calamari, cozze, olio extravergine d\'oliva, limone, prezzemolo, aglio.',
                'price' => 13.50,
                'image_url' => 'https://i.ytimg.com/vi/QlRn9MPH2Rc/maxresdefault.jpg',
                'available' => false

            ],
            [
                'name' => 'Calamari Fritti',
                'restaurant_id' => '5',
                'description' => 'Calamari freschi fritti.',
                'ingredients' => 'Calamari, farina di mais, farina di grano, sale, pepe, olio di semi per friggere.',
                'price' => 11.00,
                'image_url' => 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2019/07/calamari-fritti-2.jpg',
                'available' => true

            ],
            [
                'name' => 'Zuppa di Pesce',
                'restaurant_id' => '5',
                'description' => 'Zuppa di pesce con pomodoro e frutti di mare.',
                'ingredients' => 'Cozze, vongole, gamberi, calamari, pomodoro, cipolla, prezzemolo, aglio, olio extravergine d\'oliva, crostini di pane.',
                'price' => 15.50,
                'image_url' => 'https://blog.giallozafferano.it/valeriaciccotti/wp-content/uploads/2020/12/ZUPPA-DI-PESCE-12.jpg',
                'available' => true

            ],
            [
                'name' => 'Granchio alla Catalana',
                'restaurant_id' => '5',
                'description' => 'Granchio fresco servito con salsa Catalana.',
                'ingredients' => 'Granchio fresco, pomodori, cetrioli, cipolla rossa, peperoncino, aceto, olio extravergine d\'oliva, sale, pepe.',
                'price' => 19.00,
                'image_url' => 'https://www.lamadia.com/wp-content/uploads/2015/11/granchietti21.jpg',
                'available' => true

            ],
            [
                'name' => 'Pappardelle al Cinghiale',
                'restaurant_id' => '8',
                'description' => 'Pappardelle fatte in casa con ragù di cinghiale.',
                'ingredients' => 'Pappardelle fatte in casa, cinghiale, pomodoro, carote, sedano, cipolla, vino rosso, olio extravergine d\'oliva, sale, pepe.',
                'price' => 15.50,
                'image_url' => 'https://www.casapappagallo.it/storage/21303/pappardelle-con-il-cinghiale-%28sito%29.jpg',
                'available' => true
            ],
            [
                'name' => 'Tagliata di Manzo',
                'restaurant_id' => '3',
                'description' => 'Fettine di manzo grigliate servite con rucola e scaglie di Parmigiano.',
                'ingredients' => 'Fettine di manzo, rucola, Parmigiano Reggiano, olio extravergine d\'oliva, sale, pepe.',
                'price' => 22.00,
                'image_url' => 'https://www.google.com/search?sca_esv=23dbae34678f821e&rlz=1C1CHBF_itIT1059IT1059&sxsrf=ACQVn08y4JEF_XtnbB0XiOr_ABQHYkeF5A:1710980690018&q=Tagliata+di+Manzo&tbm=isch&source=lnms&prmd=ivnbz&sa=X&sqi=2&ved=2ahUKEwiZx_vhi4SFAxU1g_0HHa8kBdoQ0pQJegQIEhAB&biw=2133&bih=1012&dpr=0.9#imgrc=Zu1adTXvr9inrM',
                'available' => true
            ],
            [
                'name' => 'Spaghetti alla Carbonara',
                'restaurant_id' => '2',
                'description' => 'Spaghetti conditi con uova, guanciale, pecorino romano e pepe nero.',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino romano, pepe nero.',
                'price' => 12.00,
                'image_url' => 'https://www.giallozafferano.it/images/219-21928/Spaghetti-alla-Carbonara_650x433_wm.jpg',
                'available' => true
            ],
            [
                'name' => 'Sushi Misto',
                'restaurant_id' => '6',
                'description' => 'Assortimento di sushi fresco: nigiri, sashimi e maki.',
                'ingredients' => 'Riso, pesce crudo (salmone, tonno, branzino), alghe nori, avocado, cetriolo, salsa di soia, wasabi, zenzero marinato.',
                'price' => 25.00,
                'image_url' => 'https://www.sushimaisoncrema2.it/wp-content/uploads/2020/04/065-Sushi-Maison-Crema-2.jpg',
                'available' => true
            ],
            [
                'name' => 'Panino con Prosciutto Crudo e Mozzarella',
                'restaurant_id' => rand(10, 20),
                'description' => 'Un delizioso panino con fette di prosciutto crudo, mozzarella fresca, pomodori secchi e rucola.',
                'ingredients' => 'Prosciutto crudo, mozzarella, pomodori secchi, rucola',
                'price' => 6.00,
                'image_url' => 'https://i2.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2015/11/1332_panino.jpg?fit=1216%2C616&ssl=1',
                'available' => true,
            ],
            [
                'name' => 'Panino Vegetariano',
                'restaurant_id' => rand(10, 20),
                'description' => 'Un panino sano e gustoso con falafel, hummus, pomodori, cetrioli, lattuga e salsa tahini.',
                'ingredients' => 'Falafel, hummus, pomodori, cetrioli, lattuga, salsa tahini',
                'price' => 5.50,
                'image_url' => 'https://www.ilgolosomangiarsano.com/wp-content/uploads/2015/05/Panino-mediterraneo.jpg',
                'available' => true,
            ],
            [
                'name' => 'Panino con Salmone Affumicato',
                'restaurant_id' => rand(10, 20),
                'description' => 'Pane integrale con salmone affumicato, formaggio spalmabile, avocado e insalata.',
                'ingredients' => 'Pane integrale, salmone affumicato, formaggio spalmabile, avocado, insalata',
                'price' => 7.00,
                'image_url' => 'https://www.myamericankitchen.it/wp-content/uploads/2019/04/panino-salmone-affumicato-e-avocado-1.jpg',
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
