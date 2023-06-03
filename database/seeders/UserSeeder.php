<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create('it_IT');
        $collection = collect(['@gmail.com', '@libero.it', '@info.food4you', '@outlook.it', '@hotmail.com']);



        for ($i = 0; $i < 12; $i++) {
            $users = new User();
            $users->name = $faker->name();
            $users->email = Str::slug($users->name, '') . $collection->random();
            $users->telephone_number = $faker->phoneNumber;
            $users->telephone_number = str_replace(' ', '', $users->telephone_number); // Rimuovi spazi
            $users->telephone_number = str_replace('-', '', $users->telephone_number); // Rimuovi trattini
            $users->telephone_number = str_replace('/', '', $users->telephone_number); // Rimuovi slash
            $users->telephone_number = str_replace('.', '', $users->telephone_number); // Rimuovi punti
            $users->telephone_number = '+39' . substr($users->telephone_number, -10); // Aggiungi prefisso italiano


            $users->email_verified_at = now();
            $users->password = Hash::make($users->name . $faker->randomNumber(2));
            $users->remember_token = Str::random(10);

            $users->save();
            // $users = new User();
            // $users->name => fake()->name(),
            // $users->email => fake()->safeEmail(),
            // $users->email_verified_at => now(),
            // $users->password => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // $users->telephone_number => random_int(1000000000, 9999999999),
            // $users->remember_token => Str::random(10),
        }
    }
};
