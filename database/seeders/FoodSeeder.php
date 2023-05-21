<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newFood = new Food([
            'name' => 'Panino',
            'price' => 10.00 ,
            'ingredients' => 'Bun con sesamo',
            'description' => 'Il Panino, un grande classico, semplice ma buonissimo!',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();

             $newFood = new Food([
            'name' => 'Pizza Margherita',
            'price' => 6.00 ,
            'ingredients' => 'Impasto tradizionale, Pomodoro , Mozzarella' ,
            'description' => 'Margherita napoletana, dal sapore tipico',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();

        $newFood = new Food([
            'name' => 'Pulled Pork',
            'price' => 18.00 ,
            'ingredients' => 'Maiale sfilacciato, salsa barbecue, fagioli, coleslaw',
            'description' => 'Vola in america con il nostro Pulled Pork!',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();

        $newFood = new Food([
            'name' => 'Ceasar Salad',
            'price' => 12.00 ,
            'ingredients' => 'Lattuga, salsa Worcestershire, aglio, Limone, Parmigiano, Olio EVO',
            'description' => 'Rimani fit senza rinunciare a nulla con la nostra Ceasar Salad!',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();

        $newFood = new Food([
            'name' => 'Spaghetti al sugo',
            'price' => 8.00 ,
            'ingredients' => 'Spaghetti, Sugo di pomodori',
            'description' => 'la grande tradizione italiana in un solo piatto!',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();

        $newFood = new Food([
            'name' => 'Filetto di Black Angus',
            'price' => 20.00 ,
            'ingredients' => 'Filetto di Black Angus, Vino Rosso, Sale, Pepe',
            'description' => 'Il Filetto di Black Angus vi farà impazzire!',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();


        $newFood = new Food([
            'name' => 'Waffle and Fruits',
            'price' => 6.50 ,
            'ingredients' => 'Waffle, Gelato alla vaniglia, Frutti di bosco, Caramello salato',
            'description' => 'Waffle con gelato e frutta, perfetto per godersi un dolce fresco e saporito.',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();

        $newFood = new Food([
            'name' => 'Cheescake al Pistacchio',
            'price' => 6.00 ,
            'ingredients' => 'Cheescake, crema di pistacchio, pistacchio tritato',
            'description' => 'Un classico inglese, ma con un twist Pistacchioso!',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();

        $newFood = new Food([
            'name' => 'Frittura di Pesce',
            'price' => 9.00 ,
            'ingredients' => 'Gamberetti, Triglie, Acciughe, Merluzzetti, Calamari, Triglie',
            'description' => 'La nostra frittura dal profumo inconfondibile, gustala ora!',
            'vegan' => 0 ,
            'spicy' => 0 ,
            'availability' => 1 ,
            'visibility' => 1 ,
        ]);
        $newFood->save();





    }
}
