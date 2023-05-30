<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurantNames = [
            // Ristoranti Italiani
            "Ristorante Bella Italia",
            "Trattoria del Nonno",
            "Osteria Romana",
            "Pizzeria Napoli",
            "Antica Trattoria",
            "Ristorante Mare e Monti",
            "Osteria La Pergola",
            "Trattoria da Giovanni",
            "Ristorante La Cucina",
            "Pizzeria Da Mario",
            "Osteria La Taverna",
            "Ristorante Al Gambero",
            "Trattoria La Vecchia Fontana",
            "Ristorante La Perla",
            "Pizzeria La Famiglia",
            "Osteria Il Fienile",
            "Ristorante La Dolce Vita",
            "Trattoria Buon Gusto",
            "Osteria La Bottega",
            "Ristorante L'Angolo",
            "Pizzeria La Grotta",
            "Osteria La Brace",
            "Trattoria Il Poggio",
            "Ristorante La Terrazza",
            "Pizzeria La Piazzetta",
            "Osteria Il Mulino",
            "Ristorante La Sosta",
            "Trattoria Il Grillo",
            "Ristorante Il Nido",
            "Pizzeria La Rustica",
            "Osteria La Sirena",

            // Ristoranti
            "Ristorante Sakura",
            "Sushi Bar Zen",
            "Tempura House",
            "Ramen World",
            "Soba Noodle Bar",
            "Mochi Dessert Shop",

            // Ristoranti Cinesi
            "Dragon Garden",
            "Panda Express",
            "Great Wall Cuisine",
            "Golden Dragon Palace",
            "Bamboo Garden",
            "Red Lantern",
            "Fortune House",
            "Jade Palace",
            "China Star",
            "Silk Road Bistro",

            // Ristoranti Fusion
            "Fusion Flavor",
            "Global Fusion",
            "East Meets West",
            "Fusion Junction",
            "Culinary Fusion",
            "Fusion Grill",
            "Flavors of the World",
            "Fusion Fusion",
            "Fusion Delight",
            "Creative Fusion",

            // Ristoranti Messicani
            "El Sombrero",
            "Casa de Salsa",
            "La Fiesta Mexicana",
            "Mexican Grill",
            "El Patron",
            "Taqueria Jalisco",
            "La Hacienda",
            "Mexican Spice",
            "Mi Casa",
            "Sabor Mexicano",

            // Ristoranti Thailandesi
            "Thai Orchid",
            "Bangkok Spice",
            "Siam Cuisine",
            "Thai Delight",
            "Lotus Thai",
            "Chili Thai",
            "Thai Street Food",
            "Thai Basil",
            "Thai Smile",
            "Sawasdee Thai",

            // Ristoranti Indiani
            "Curry House",
            "Taj Mahal",
            "Spice of India",
            "Namaste Indian Cuisine",
            "Rajasthan Palace",
            "Indian Delight",
            "Bollywood Bites",
            "Flavors of India",
            "Indian Oven",
            "Indian Spice",

            // Lounge Bar
            "The Lounge Oasis",
            "Cosmo Lounge",
            "Chillax Lounge",
            "Urban Lounge",
            "Harmony Lounge",
            "The Velvet Lounge",
            "Sunset Lounge",
            "Skyline Lounge",
            "The Chill Lounge",
            "Luxe Lounge",

            // Food & Drink
            "Taste Boulevard",
            "The Flavor Market",
            "Gourmet Oasis",
            "Culinary Delights",
            "Savor & Sip",
            "Foodie Haven",
            "The Gastronomy Hub",
            "Epicurean Junction",
            "Tasty Tidbits",
            "Delicious Destination"

        ];


        $category_ids = Category::all()->pluck('id')->all();
        $user_ids = User::all()->pluck('id')->all();

        $faker = Faker::create('it_IT'); // Creazione di un'istanza di Faker con localizzazione italiana

        foreach ($user_ids as $user_id) {
            $restaurant = new Restaurant();
            $restaurant->name = $restaurantNames[array_rand($restaurantNames)];
            $restaurant->address = $faker->streetAddress . ', Roma';
            $restaurant->telephone_number = $faker->phoneNumber;
            $restaurant->telephone_number = str_replace(' ', '', $restaurant->telephone_number); // Rimuovi spazi
            $restaurant->telephone_number = str_replace('-', '', $restaurant->telephone_number); // Rimuovi trattini
            $restaurant->telephone_number = str_replace('/', '', $restaurant->telephone_number); // Rimuovi slash
            $restaurant->telephone_number = str_replace('.', '', $restaurant->telephone_number); // Rimuovi punti
            $restaurant->telephone_number = '+39' . substr($restaurant->telephone_number, -10); // Aggiungi prefisso italiano

            $restaurant->slug = Str::slug($restaurant->name, '-');

            $restaurant->email = Str::slug($restaurant->name, '') . '@food4you.com';
            $restaurant->vat = 'IT' . random_int(100000000, 999999999);
            $restaurant->user_id = $user_id;

            $restaurant->save();

            $restaurant->categories()->attach($faker->randomElements($category_ids, rand(1, 4)));
        }
    }
}
