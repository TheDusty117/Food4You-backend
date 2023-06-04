<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
//aggiungere Str per usare slug nelle categories?

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['italiano', 'internazionale', 'indiano', 'messicano', 'giapponese', 'thailandese', 'fusion', 'cinese', 'primi piatti', 'secondi piatti', 'pizze', 'panini', 'carne', 'pesce'];

        $categoriesImages = [ '/img/italiano.png','/img/internazionale.png','/img/indiano.png','/img/messicano.png','/img/giapponese.png','/img/thailandese.png','/img/fusion.png','/img/cinese.png','/img/primi-piatti.png','/img/secondi-piatti.png','/img/pizza.png','/img/panini.png','/img/carne.png','/img/pesce.png' ];

        $categoryIndex = 0;

        foreach ($categories as $category_name) {
            $category = new Category();
            $category->name = $category_name;
            $category->category_img = $categoriesImages[$categoryIndex];
            $categoryIndex = ($categoryIndex + 1);
            $category->save();
        }
    }
}
