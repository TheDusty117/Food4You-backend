<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orders;
use Faker\Factory as Faker;

class OrdersSeeder extends Seeder
{
    public function run()
    {

        $faker = Faker::create('it_IT');

        $faker = Faker::create();


        for ($i = 1; $i <= 20; $i++) {
            Orders::create([
                'address' => $faker->city . ', Roma',
                'name' => $faker->name,
                'order_price' => $faker->randomFloat(2, 10, 100),
                'mail' => $faker->email,
                'telephone_number' => $faker->numberBetween(3000000000, 3999999999),
                'status' => true,
            ]);
        }
    }
}
