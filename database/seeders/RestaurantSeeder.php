<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $category_ids = Category::all()->pluck('id')->all();
        $user_ids = User::all()->pluck('id')->all();

        $restaurants = [
            [
                'name' => 'La Cuccuma',
                'address' => 'Via Merulana, 221',
                'telephone_number' => '06 7720 1361',
                'email' => 'lacuccuma@info.it',

            ],
            [
                'name' => 'Trieste Pizza Roma',
                'address' => 'Corso di Porta Romana, 83',
                'telephone_number' => '085 421 40 38',
                'email' => 'info@trieste.pizza',
            ],
            [
                'name' => 'Pizzeria della Madonna dei Monti',
                'address' => 'Via della Madonna dei Monti, 110',
                'telephone_number' => '06 6941 3112',
                'email' => 'madonnadeimonti@info.it',
            ],
            [
                'name' => 'La Prezzemolina',
                'address' => 'Via del Colosseo, 1',
                'telephone_number' => '06 9484 3773',
                'email' => 'laprezzemolina@tiscali.it',
            ],
            [
                'name' => 'Piccolo Buco',
                'address' => 'Via del Lavatore, 91',
                'telephone_number' => '06 6938 0163',
                'email' => 'piccolobuco@gmail.com',
            ],
            [
                'name' => 'Sushisen',
                'address' => 'VIA GIUSEPPE GIULIETTI, 21A',
                'telephone_number' => '06-57.56.945',
                'email' => 'INFO@SUSHISEN.IT',
            ],
            [
                'name' => 'Tora Sushi Ristorante Giapponese e Cucina Asiatica',
                'address' => 'Corso del Rinascimento, 71',
                'telephone_number' => '06 8913 4334',
                'email' => 'torasushi@gmail.com',
            ],
            [
                'name' => 'Shiroya - ristorante giapponese',
                'address' => 'Via Dei Baullari, 147a',
                'telephone_number' => '06 6476 0753',
                'email' => 'info@shiroya.it',
            ],
            [
                'name' => 'Domò Sushi',
                'address' => 'Via Novara, 21',
                'telephone_number' => '366 457 6219',
                'email' => 'domopariolisrl@gmail.com',
            ],
            [
                'name' => 'Jaipur - Ristorante Indiano',
                'address' => 'Via di S. Francesco a Ripa, 56',
                'telephone_number' => '06 580 3992',
                'email' => 'infojaipur.@gmail.com',
            ],
            [
                'name' => 'Himalaya Palace',
                'address' => 'Circonvallazione Gianicolense, 277',
                'telephone_number' => '06 582 6001',
                'email' => 'info@himalayapalace.com',
            ],
            [
                'name' => 'Bibliothè',
                'address' => 'Via Celsa, 5',
                'telephone_number' => '06 678 1427',
                'email' => 'info@bibliothe.guru',
            ],
            [
                'name' => 'La Cucaracha',
                'address' => 'Via Mocenigo, 10',
                'telephone_number' => '06 3974 6373',
                'email' => 'info@lacucaracha.it',
            ],
            [
                'name' => 'El Jalapeño',
                'address' => 'Via Aurelia, 483 Mercato Irnerio - Box 64',
                'telephone_number' => '06 8913 5970',
                'email' => 'info@eljalapeno.it',
            ],
            [
                'name' => 'Casa Sánchez',
                'address' => 'Via Catanzaro, 6b',
                'telephone_number' => '06 4554 2607',
                'email' => 'casasanchezroma@gmail.com',
            ],
            [
                'name' => 'Pico s Taqueria & American grill',
                'address' => 'Vicolo della Renella, 94',
                'telephone_number' => '06 4424 2807',
                'email' => 'picosofficial@gmail.com',
            ],
            [
                'name' => 'Ma Va ? Restaurant Roma',
                'address' => 'Via Euclide Turba, 6/8',
                'telephone_number' => '06 372 9134',
                'email' => 'ristomava@libero.it',
            ],
            [
                'name' => 'Nativa Ristorante',
                'address' => 'Via Umberto Moricca, 100',
                'telephone_number' => '06 6400 8399',
                'email' => 'info@leggimenu.it',
            ],
            [
                'name' => 'O Famo Strano',
                'address' => 'Viale dello Scalo S. Lorenzo, 11',
                'telephone_number' => '327 004 0637',
                'email' => 'ofamostrano@libero.it',
            ],
            [
                'name' => 'By Luk',
                'address' => 'Via Giuseppe Libetta, 41',
                'telephone_number' => '351 718 5863',
                'email' => 'byluk@info.it',
            ],
        ];

        foreach ($restaurants as $rest) {
            $restaurant = new Restaurant();
            $restaurant->name = $rest['name'];
            $restaurant->address = $rest['address'];
            $restaurant->telephone_number = $rest['telephone_number'];
            $restaurant->email = $rest['email'];
            $restaurant->vat = 'IT' . random_int(100000000, 999999999);
            $restaurant->user_id = $faker->randomElement($user_ids);
            $restaurant->save();

            $restaurant->categories()->attach($faker->randomElements($category_ids, rand(1, 16)));

            // for ($i = 0; $i < 20; $i++) {
            //     $restaurant->telephone_number = $faker->randomNumber(11, true);
            //     $restaurant->email = $restaurant->name . '@gmail.com';
            //     $restaurant->vat = $faker->vat();
            //     $restaurant->save();
            // }
        }
    }
}
