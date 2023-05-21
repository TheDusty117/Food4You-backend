<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $restaurants = [
            [
                'name' => 'Materia Pizzeria Milano',
                'address' => 'Via del Torchio, 1',
            ],
            [
                'name' => 'Pizza Am',
                'address' => 'Corso di Porta Romana, 83',
            ],
            [
                'name' => 'Shibuya Milano',
                'address' => 'Via Mauro Macchi, 69',
            ],
            [
                'name' => 'Nàpiz Milano',
                'address' => 'Viale Vittorio Veneto, 30',
            ],
            [
                'name' => 'Pizzeria Positano Milano',
                'address' => 'Via S. Vito, 5',
            ],
            [
                'name' => 'Yang Sushi and Fusion',
                'address' => 'Via Gerolamo Cardano, 8',
            ],
            [
                'name' => 'Yokohama Sushi Restaurant',
                'address' => 'Via Pantano, 8',
            ],
            [
                'name' => 'Piedra del Sol',
                'address' => 'Via Emilio Cornalia, 2',
            ],
            [
                'name' => 'SOL Y LUNA MEXICAN GRILL',
                'address' => 'Viale Francesco Restelli, 6',
            ],
            [
                'name' => 'Cueva Maya',
                'address' => 'Viale Monte Nero, 19',
            ],
            [
                'name' => 'Ristorante Indiano Shiva',
                'address' => 'Viale Gian Galeazzo, 7',
            ],
            [
                'name' => 'Ristorante Indiano Just India',
                'address' => 'Via Benedetto Marcello, 34',
            ],
            [
                'name' => 'Shanti - Ristorante indiano',
                'address' => 'Via Olona, 19',
            ],
            [
                'name' => 'CIBO Vegan food',
                'address' => 'Via Achille Maiocchi, 26',
            ],
            [
                'name' => 'VegAmore',
                'address' => 'Via Crema, 12',
            ],
            [
                'name' => 'Altatto',
                'address' => 'Via Comune Antico, 15',
            ],
            [
                'name' => 'Thai Chokdee restaurant',
                'address' => 'Via Massimo Gorki, 1',
            ],
            [
                'name' => 'Thai Chokdee restaurant',
                'address' => 'Via Cenisio, 8',
            ],
            [
                'name' => 'Thai Square',
                'address' => 'Corso di porta ticinese angolo',
            ],
            [
                'name' => 'WOK on the GO',
                'address' => 'Via Luigi Settembrini, 26',
            ],
        ];

        foreach ($restaurants as $rest) {
            $restaurant = new Restaurant();
            $restaurant->name = $rest['name'];
            $restaurant->address = $rest['address'];
            $restaurant->telephone_number = random_int(100000000, 999999999);
            $restaurant->email = $rest['name'] . '@gmail.com';
            $restaurant->vat = 'IT' . random_int(100000000, 999999999);
            $restaurant->save();

            // for ($i = 0; $i < 20; $i++) {
            //     $restaurant->telephone_number = $faker->randomNumber(11, true);
            //     $restaurant->email = $restaurant->name . '@gmail.com';
            //     $restaurant->vat = $faker->vat();
            //     $restaurant->save();
            // }
        }
    }
}
