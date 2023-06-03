<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurantNames = [
            "Trattoria del Nonno",
            "Ristorante Sakura",
            "Panda Express",
            "East Meets West",
            "El Sombrero",
            "Thai Orchid",
            "Bollywood Bites",
            "The Lounge Oasis",
            "Delicious Destination",
        ];
        $categoryRestaurants = [
            ['italiano', 'primi piatti', 'secondi piatti', 'pizze'],
            ['giapponese', 'pesce'],
            ['cinese', 'primi piatti', 'secondi piatti'],
            ['fusion', 'pesce', 'carne'],
            ['messicano', 'carne', 'secondi piatti'],
            ['thailandese', 'carne', 'pesce'],
            ['panini', 'indiano', 'primi piatti', 'carne'],
            ['internazionale', 'panini', 'carne', 'pesce'],
            ['internazionale', 'panini', 'carne', 'pesce'],
        ];

        $category_ids = Category::all()->pluck('id')->all();
        $user_ids = User::all()->pluck('id')->all();

        $faker = Faker::create('it_IT');

        $restaurantCount = count($restaurantNames);
        $restaurantIndex = 0;
        $categoryIndex = 0;

        foreach ($user_ids as $user_id) {
            $restaurant = new Restaurant();
            $restaurant->name = $restaurantNames[$restaurantIndex];
            $restaurantIndex = ($restaurantIndex + 1) % $restaurantCount;

            $restaurant->address = $faker->streetAddress . ', Roma';
            $restaurant->telephone_number = $faker->phoneNumber;
            $restaurant->telephone_number = str_replace(' ', '', $restaurant->telephone_number);
            $restaurant->telephone_number = str_replace('-', '', $restaurant->telephone_number);
            $restaurant->telephone_number = str_replace('/', '', $restaurant->telephone_number);
            $restaurant->telephone_number = str_replace('.', '', $restaurant->telephone_number);
            $restaurant->telephone_number = '+39' . substr($restaurant->telephone_number, -10);

            $restaurant->slug = Str::slug($restaurant->name, '-');
            $restaurant->email = Str::slug($restaurant->name, '') . '@food4you.com';
            $restaurant->vat = 'IT' . random_int(100000000, 999999999);
            $restaurant->user_id = $user_id;

            $restaurant->save();

            $categories = $categoryRestaurants[$categoryIndex];
            $categoryIndex = ($categoryIndex + 1) % count($categoryRestaurants);

            foreach ($categories as $category) {
                $categoryModel = Category::firstOrCreate(['name' => $category]);
                $restaurant->categories()->attach($categoryModel);
            }
        }
    }
}
