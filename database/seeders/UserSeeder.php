<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        User::create([
            'name'=>'test',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('password'),
        ]);

        Restaurant::create([
            'user_id'=>23,
            'name'=>'peppinos pizza',
            'telephone_number'=>'449955944',
            'address'=>'address test',
            'vat'=>'11111111111',
        ]);


    }
};









