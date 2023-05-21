<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $user = User::create([
    //         'name' => 'Corrado de Pinto',
    //         'email' => 'corradodepinto.design@gmail.com',
    //         'password' => Hash::make('ciaociao'),
    //         'telephone_number' => '3339998881',
    //     ]);

    //     $user = User::create([
    //         'name' => 'Peppino Impastato',
    //         'email' => 'peppinoimpastato@gmail.com',
    //         'password' => Hash::make('ciaociao'),
    //         'telephone_number' => '2321394934',
    //     ]);

    //     for ($i = 0; $i < 10; $i++)
    //     {

    //         return[
    //         'name' => $this->faker->name(),]
    //         // $user = new User();
    //         // $user->name = $faker->name();
    //         // $user->email = $user->name.'@gmail.com';
    //         // $user->password = Hash::make('ciaociao');
    //         // $user->save();
    //     },
    public function run()
    {
        \App\Models\User::factory(20)->create();
    }
    }



        
        
        // [
        //     'name' => 'Peppino impastato',
        //     'email' => 'peppinoimpastato@gmail.com',
        //     'password' => Hash::make('ciaociao'),
        //     'telephone_number' => '2321394934',
        // ];[
        //     'name' => 'Ciccio Benzina',
        //     'email' => 'cicciobenzina@gmail.com',
        //     'password' => Hash::make('ciaociao'),
        //     'telephone_number' => '2837495827',
        // ];[
        //     'name' => 'Carlo Cracco',
        //     'email' => 'carlocracco@gmail.com',
        //     'password' => Hash::make('ciaociao'),
        //     'telephone_number' => '3479384095',
        // ];[
        //     'name' => 'Joe Bastianich',
        //     'email' => 'joe@gmail.com',
        //     'password' => Hash::make('ciaociao'),
        //     'telephone_number' => '4758599583',
        // ];[
        //     'name' => 'Anotnio Cannavacciuolo',
        //     'email' => 'haicagato.design@gmail.com',
        //     'password' => Hash::make('ciaociao'),
        //     'telephone_number' => '3748599889',
        // ];[
        //     'name' => 'Ciccio Benzina',
        //     'email' => 'ciccio.design@gmail.com',
        //     'password' => Hash::make('ciaociao'),
        //     'telephone_number' => '7488472932',
        // ];[
        //     'name' => 'Ciccio Gamer',
        //     'email' => 'paguri4ever@gmail.com',
        //     'password' => Hash::make('ciaociao'),
        //     'telephone_number' => '3849984885',
        // ];[
        //     'name' => 'Antonio Barbieri',
        //     'email' => 'chiusodilunedì@gmail.com',
        //     'password' => Hash::make('ciaociao'),
        //     'telephone_number' => '4938499588',
        // ]
    
    

 

 
    

