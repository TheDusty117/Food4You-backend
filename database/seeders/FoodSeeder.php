<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;
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
        $restaurant_ids = Restaurant::all()->pluck('id')->all();

        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);
        $newFood->name = 'Panino';
        $newFood->price = 10.00;
        $newFood->ingredients = 'Bun con sesamo';
        $newFood->description = 'Il Panino, un grande classico, semplice ma buonissimo!';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');
        $newFood->save();

        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);

        $newFood->name = 'Pizza Margherita';
        $newFood->price = 6.00;
        $newFood->ingredients = 'Impasto tradizionale, Pomodoro , Mozzarella';
        $newFood->description = 'Margherita napoletana, dal sapore tipico';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');

        $newFood->save();

        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);

        $newFood->name = 'Pulled Pork';
        $newFood->price = 18.00;
        $newFood->ingredients = 'Maiale sfilacciato, salsa barbecue, fagioli, coleslaw';
        $newFood->description = 'Vola in america con il nostro Pulled Pork!';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');

        $newFood->save();

        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);

        $newFood->name = 'Ceasar Salad';
        $newFood->price = 12.00;
        $newFood->ingredients = 'Lattuga, salsa Worcestershire, aglio, Limone, Parmigiano, Olio EVO';
        $newFood->description = 'Rimani fit senza rinunciare a nulla con la nostra Ceasar Salad!';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');

        $newFood->save();

        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);

        $newFood->name = 'Spaghetti al sugo';
        $newFood->price = 8.00;
        $newFood->ingredients = 'Spaghetti, Sugo di pomodori';
        $newFood->description = 'la grande tradizione italiana in un solo piatto!';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');

        $newFood->save();

        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);

        $newFood->name = 'Filetto di Black Angus';
        $newFood->price = 20.00;
        $newFood->ingredients = 'Filetto di Black Angus, Vino Rosso, Sale, Pepe';
        $newFood->description = 'Il Filetto di Black Angus vi farà impazzire!';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');

        $newFood->save();


        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);

        $newFood->name = 'Waffle and Fruits';
        $newFood->price = 6.50;
        $newFood->ingredients = 'Waffle, Gelato alla vaniglia, Frutti di bosco, Caramello salato';
        $newFood->description = 'Waffle con gelato e frutta, perfetto per godersi un dolce fresco e saporito.';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');

        $newFood->save();

        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);

        $newFood->name = 'Cheescake al Pistacchio';
        $newFood->price = 6.00;
        $newFood->ingredients = 'Cheescake, crema di pistacchio, pistacchio tritato';
        $newFood->description = 'Un classico inglese, ma con un twist Pistacchioso!';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');

        $newFood->save();

        $newFood = new Food();
        $newFood->restaurant_id = $faker->randomElement($restaurant_ids);

        $newFood->name = 'Frittura di Pesce';
        $newFood->price = 9.00;
        $newFood->ingredients = 'Gamberetti, Triglie, Acciughe, Merluzzetti, Calamari, Triglie';
        $newFood->description = 'La nostra frittura dal profumo inconfondibile, gustala ora!';
        $newFood->visibility = 1;
        $newFood->slug = Str::slug($newFood->name, '-');

        $newFood->save();
    }
}
