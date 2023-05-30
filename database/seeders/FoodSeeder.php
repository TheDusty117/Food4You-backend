<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $restaurant_ids = Restaurant::all()->pluck('id')->toArray();
        $orders_ids = Order::all()->pluck('id')->toArray();
        

        $foods = [
            [
                'name' => 'Panino',
                'price' => 10.00,
                'ingredients' => 'Bun con sesamo',
                'description' => 'Il Panino, un grande classico, semplice ma buonissimo!',
            ],
            [
                'name' => 'Pizza Margherita',
                'price' => 6.00,
                'ingredients' => 'Impasto tradizionale, Pomodoro , Mozzarella',
                'description' => 'Margherita napoletana, dal sapore tipico',
            ],
            [
                'name' => 'Pulled Pork',
                'price' => 18.00,
                'ingredients' => 'Maiale sfilacciato, salsa barbecue, fagioli, coleslaw',
                'description' => 'Vola in America con il nostro Pulled Pork!',
            ],
            [
                'name' => 'Ceasar Salad',
                'price' => 12.00,
                'ingredients' => 'Lattuga, salsa Worcestershire, aglio, Limone, Parmigiano, Olio EVO',
                'description' => 'Rimani fit senza rinunciare a nulla con la nostra Ceasar Salad!',
            ],
            [
                'name' => 'Spaghetti al sugo',
                'price' => 8.00,
                'ingredients' => 'Spaghetti, Sugo di pomodori',
                'description' => 'La grande tradizione italiana in un solo piatto!',
            ],
            [
                'name' => 'Filetto di Black Angus',
                'price' => 20.00,
                'ingredients' => 'Filetto di Black Angus, Vino Rosso, Sale, Pepe',
                'description' => 'Il Filetto di Black Angus vi farà impazzire!',
            ],
            [
                'name' => 'Waffle and Fruits',
                'price' => 6.50,
                'ingredients' => 'Waffle, Gelato alla vaniglia, Frutti di bosco, Caramello salato',
                'description' => 'Waffle con gelato e frutta, perfetto per godersi un dolce fresco e saporito.',
            ],
            [
                'name' => 'Cheesecake al Pistacchio',
                'price' => 6.00,
                'ingredients' => 'Cheesecake, crema di pistacchio, pistacchio tritato',
                'description' => 'Un classico inglese, ma con un twist pistacchioso!',
            ],
            [
                'name' => 'Frittura di Pesce',
                'price' => 9.00,
                'ingredients' => 'Gamberetti, Triglie, Acciughe, Merluzzetti, Calamari',
                'description' => 'La nostra frittura dal profumo inconfondibile, gustala ora!',
            ],
            [
                'name' => 'Lasagna alla Bolognese',
                'price' => 14.00,
                'ingredients' => 'Sfoglia all\'uovo, Ragu\' di carne, Besciamella, Parmigiano',
                'description' => 'La lasagna classica con il sapore autentico della Bologna!',
            ],
            [
                'name' => 'Tiramisù',
                'price' => 7.00,
                'ingredients' => 'Savoiardi, Caffè, Mascarpone, Cacao',
                'description' => 'Il dolce italiano per eccellenza, un vero piacere per il palato!',
            ],
            // Aggiungi gli altri cibi qui
        ];

        foreach ($foods as $foodData) {
            $newFood = new Food();
            $newFood->restaurant_id = $faker->randomElement($restaurant_ids);
            $newFood->name = $foodData['name'];
            $newFood->price = $foodData['price'];
            $newFood->ingredients = $foodData['ingredients'];
            $newFood->description = $foodData['description'];
            $newFood->visibility = 'public';
            $newFood->slug = Str::slug($newFood->name, '-');

            // Genera un'immagine casuale utilizzando il faker
            $imagePath = $faker->image('public/images/foods', 400, 300, null, false);
            $newFood->image = $imagePath;
            
            $newFood->save();
            $newFood->orders()->attach($faker->randomElements($orders_ids, rand(1, 6)), ['quantity' => 5]);
        }
        

        
    }
}
