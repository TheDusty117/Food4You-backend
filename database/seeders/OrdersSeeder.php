<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orders;
use Faker\Factory as Faker;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            Orders::create([
                'address' => $faker->address,
                'name' => $faker->name,
                'order_price' => $faker->randomFloat(2, 10, 100),
                'mail' => $faker->email,
                'telephon_number' => $faker->randomNumber(2),
                'status' => true,
            ]);
        }
    }
}

