<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('it_IT');

        $food_ids = Food::all()->pluck('id')->all();

        for ($i = 1; $i <= 20; $i++) {
            Order::create([
                'address' => $faker->streetAddress . ', Roma',
                'name' => $faker->name,
                'order_price' => $faker->randomFloat(2, 10, 100),
                'mail' => $faker->email,
                'telephone_number' => $faker->numberBetween(3000000000, 3999999999),
                'status' => true,
            ]);
        }
    }
}
