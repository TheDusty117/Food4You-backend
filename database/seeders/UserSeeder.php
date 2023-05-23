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
    public function run(Faker $faker)
    {
        \App\Models\User::factory(20)->create();

        $users = [
            [
                'name' => 'La Cuccuma',
                'telephone_number' => '06 7720 1361',
                'email' => 'lacuccuma@info.it',

            ],
            [
                'name' => 'Trieste Pizza Roma',
                'telephone_number' => '085 421 40 38',
                'email' => 'info@trieste.pizza',
            ],
            [
                'name' => 'Pizzeria della Madonna dei Monti',
                'telephone_number' => '06 6941 3112',
                'email' => 'madonnadeimonti@info.it',
            ],
            [
                'name' => 'La Prezzemolina',
                'telephone_number' => '06 9484 3773',
                'email' => 'laprezzemolina@tiscali.it',
            ],
            [
                'name' => 'Piccolo Buco',
                'telephone_number' => '06 6938 0163',
                'email' => 'piccolobuco@gmail.com',
            ],
            [
                'name' => 'Sushisen',
                'telephone_number' => '06-57.56.945',
                'email' => 'INFO@SUSHISEN.IT',
            ],
            [
                'name' => 'Tora Sushi Ristorante Giapponese e Cucina Asiatica',
                'telephone_number' => '06 8913 4334',
                'email' => 'torasushi@gmail.com',
            ],
            [
                'name' => 'Shiroya - ristorante giapponese',
                'telephone_number' => '06 6476 0753',
                'email' => 'info@shiroya.it',
            ],
            [
                'name' => 'Domò Sushi',
                'telephone_number' => '366 457 6219',
                'email' => 'domopariolisrl@gmail.com',
            ],
            [
                'name' => 'Jaipur - Ristorante Indiano',
                'telephone_number' => '06 580 3992',
                'email' => 'infojaipur.@gmail.com',
            ],
            [
                'name' => 'Himalaya Palace',
                'telephone_number' => '06 582 6001',
                'email' => 'info@himalayapalace.com',
            ],
            [
                'name' => 'Bibliothè',
                'telephone_number' => '06 678 1427',
                'email' => 'info@bibliothe.guru',
            ],
            [
                'name' => 'La Cucaracha',
                'telephone_number' => '06 3974 6373',
                'email' => 'info@lacucaracha.it',
            ],
            [
                'name' => 'El Jalapeño',
                'telephone_number' => '06 8913 5970',
                'email' => 'info@eljalapeno.it',
            ],
            [
                'name' => 'Casa Sánchez',
                'telephone_number' => '06 4554 2607',
                'email' => 'casasanchezroma@gmail.com',
            ],
            [
                'address' => 'Vicolo della Renella, 94',
                'telephone_number' => '06 4424 2807',
                'email' => 'picosofficial@gmail.com',
            ],
            [
                'name' => 'Ma Va ? Restaurant Roma',
                'telephone_number' => '06 372 9134',
                'email' => 'ristomava@libero.it',
            ],
            [
                'name' => 'Nativa Ristorante',
                'telephone_number' => '06 6400 8399',
                'email' => 'info@leggimenu.it',
            ],
            [
                'name' => 'O Famo Strano',
                'telephone_number' => '327 004 0637',
                'email' => 'ofamostrano@libero.it',
            ],
            [
                'name' => 'By Luk',
                'telephone_number' => '351 718 5863',
                'email' => 'byluk@info.it',
            ],
        ];

        $user = User::create([
            'name' => 'Corrado de Pinto',
            'email' => 'corradodepinto.design@gmail.com',
            'password' => Hash::make('ciaociao'),
            'telephone_number' => '3339998881',
        ]);

        // foreach ($users as $user) {
        //     $new_user = new User();
        //     $new_user->name = $user['name'];
        //     $new_user->email = $user['email'];
        //     $new_user->password = Hash::make($faker->word());
        //     $new_user->telephone_number = $user['telephone_number'];
        //     $new_user->save();
        // }
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
