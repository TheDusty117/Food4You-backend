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
        $categories = ['italiano','internazionale','cinese','fusion','messicano','thailandese','indiano','giapponese','carne','pesce','panini','fast food','primi piatti','secondi piatti','lounge bar','food & drink'];

        foreach ($categories as $category_name) {
            $category = new Category();
            $category->name = $category_name;
            $category->save();
        }
    }
}

