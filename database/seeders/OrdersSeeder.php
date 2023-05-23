<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Orders;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('it_IT');

        $orders = [];
        for ($i = 0; $i < 30; $i++) {
            $order = [
                'address' => $faker->streetAddress . ', Roma',
                'name' => $faker->name,
                'order_price' => $faker->randomFloat(2, 5, 100),
                'mail' => $faker->email,
                'telephone_number' => $faker->phoneNumber,
                'status' => $faker->boolean
            ];

            $orders[] = $order;
        }

        Orders::insert($orders);
    }
}
