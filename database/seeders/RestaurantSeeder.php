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
    //USA ARRAY DI NOME RESTAURANT A CASO, E POI LI INSERISCE NEL NAME
    {
        $category_ids = Category::all()->pluck('id')->all();
        $user_ids = User::all()->pluck('id')->all();

        foreach ($user_ids as $user_id) {
            $restaurant = new Restaurant();
            $restaurant->name = $faker->name();
            $restaurant->address = $faker->address();
            $restaurant->telephone_number = $faker->phoneNumber();
            $restaurant->email = $faker->email();
            $restaurant->vat = 'IT' . random_int(100000000, 999999999);
            $restaurant->user_id = $user_id;

            $restaurant->save();

            $restaurant->categories()->attach($faker->randomElements($category_ids, rand(1, 16)));
        }

    }
}
