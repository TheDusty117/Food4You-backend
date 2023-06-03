<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Restaurant;
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
            "Trattoria del Nonno" => ['Italian'],
            "Ristorante Sakura" => ['Japanese'],
            "Panda Express" => ['Chinese'],
            "East Meets West" => ['Fusion'],
            "El Sombrero" => ['Mexican'],
            "Thai Orchid" => ['Thai'],
            "Bollywood Bites" => ['Indian'],
            "The Lounge Oasis" => ['Lounge Bar'],
            "Delicious Destination" => ['Food & Drink'],
        ];

        $user_ids = User::pluck('id')->all();

        $faker = Faker::create('it_IT');

        foreach ($user_ids as $user_id) {
            $restaurant = new Restaurant();
            $restaurantName = array_rand($restaurantNames);
            $restaurant->name = $restaurantName;
            $restaurant->address = $faker->streetAddress . ', Roma';
            $telephoneNumber = $faker->phoneNumber;
            $telephoneNumber = str_replace([' ', '-', '/', '.'], '', $telephoneNumber);
            $telephoneNumber = '+39' . substr($telephoneNumber, -10);
            $restaurant->telephone_number = $telephoneNumber;


            $restaurant->slug = Str::slug($restaurant->name, '-');
            $restaurant->email = Str::slug($restaurant->name, '') . '@food4you.com';
            $restaurant->vat = 'IT' . random_int(100000000, 999999999);
            $restaurant->user_id = $user_id;

            $restaurant->save();

            $categories = $restaurantNames[$restaurantName] ?? [];
            foreach ($categories as $categoryName) {
                $category = Category::where('name', $categoryName)->first();
                if ($category) {
                    $restaurant->categories()->attach($category->id);
                }
            }
        }
    }
}
