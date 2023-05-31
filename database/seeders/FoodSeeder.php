<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $restaurant_ids = Restaurant::all()->pluck('id')->toArray();
        $orders_ids = Order::all()->pluck('id')->toArray();


        $foods = [
            [
                'name' => 'Panino',
                'price' => 10.00,
                'ingredients' => 'Bun con sesamo',
                'description' => 'Il Panino, un grande classico, semplice ma buonissimo!',
            ],
            [
                'name'=> 'Risotto ai Funghi',
                'price'=> 15.00,
                'ingredients'=> 'Riso, funghi porcini, brodo di verdure, parmigiano',
                'description'=> 'Un gustoso risotto cremoso con funghi porcini freschi e formaggio parmigiano.'
              ],
              [
                'name'=> 'Tagliatelle al Ragù Bolognese',
                'price'=> 13.50,
                'ingredients'=> 'Tagliatelle fresche, ragù di carne, salsa di pomodoro',
                'description'=> 'Le classiche tagliatelle alluovo servite con un ricco ragù di carne e salsa di pomodoro.',
              ],
              [
                'name'=> 'Sushi Misto',
                'price'=> 18.00,
                'ingredients'=> 'Riso, pesce crudo assortito, alga nori',
                'description'=> 'Una selezione di sushi fresco, con pesce crudo assortito e riso delicato.'
              ],
              [
                'name'=> 'Pollo alla Griglia',
                'price'=> 12.00,
                'ingredients'=> 'Petto di pollo, marinata di erbe, contorno di verdure grigliate',
                'description'=> 'Un succulento petto di pollo alla griglia servito con una marinata di erbe aromatiche e contorno di verdure grigliate.'
              ],
              [
                'name'=> 'Lasagne al Forno',
                'price'=> 16.50,
                'ingredients'=> 'Sfoglie di pasta alluovo, ragù di carne, besciamella, parmigiano',
                'description'=> 'Uno strato di sfoglie di pasta alluovo, alternato con ragù di carne, besciamella e parmigiano, il tutto cotto al forno.'
              ],
              [
                'name'=> 'Insalata di Quinoa',
                'price'=> 10.50,
                'ingredients'=> 'Quinoa, pomodori, cetrioli, olive, feta, olio doliva',
                'description'=> 'Un insalata leggera e salutare con quinoa, pomodori, cetrioli, olive, feta e condita con olio doliva.'
              ],
              [
                'name'=> 'Fish and Chips',
                'price'=> 14.00,
                'ingredients'=> 'Filetto di merluzzo, patatine fritte, salsa tartara',
                'description'=> 'Un classico piatto britannico con filetto di merluzzo impanato, patatine fritte croccanti e salsa tartara.'
              ],
              [
                'name'=> 'Taco di Pollo',
                'price'=> 9.50,
                'ingredients'=> 'Tortilla di mais, pollo grigliato, salsa al lime, guacamole',
                'description'=> 'Un gustoso taco con tortilla di mais ripiena di pollo grigliato, salsa al lime e guacamole.'
              ],
              [
                'name'=> 'Gnocchi al Pesto',
                'price'=> 11.50,
                'ingredients'=> 'Gnocchi di patate, pesto di basilico, pinoli, parmigiano',
                'description'=> 'Gnocchi di patate freschi conditi con pesto di basilico, pinoli tostati e formaggio parmigiano.'
              ],
              [
                'name'=> 'Bistecca alla Griglia',
                'price'=> 20.00,
                'ingredients'=> 'Bistecca di manzo, sale, pepe, burro e aglio',
                'description'=> 'Una succulenta bistecca di manzo alla griglia, condita con sale, pepe, burro e aglio.'
              ],
              [
                'name'=> 'Cannelloni al Forno',
                'price'=> 15.50,
                'ingredients'=> 'Tubetti di pasta, ripieno di carne, besciamella, salsa di pomodoro',
                'description'=> 'Tubetti di pasta ripieni di carne, ricoperti di besciamella e salsa di pomodoro, poi gratinati al forno.'
              ],
              [
                'name'=> 'Insalata Caprese',
                'price'=> 9.00,
                'ingredients'=> 'Mozzarella di bufala, pomodori, basilico, olio EVO',
                'description'=> 'insalata fresca e semplice con mozzarella di bufala, pomodori maturi, basilico fresco e olio EVO.'
              ],
              [
                'name'=> 'Risotto ai Frutti di Mare',
                'price'=> 17.50,
                'ingredients'=> 'Riso, frutti di mare misti, brodo di pesce, vino bianco',
                'description'=> 'Un risotto cremoso arricchito con una selezione di frutti di mare, cotto nel brodo di pesce e vino bianco.'
              ],
              [
                'name'=> 'Polpette al Sugo',
                'price'=> 12.00,
                'ingredients'=> 'Polpette di carne, salsa di pomodoro, basilico',
                'description'=> 'Deliziose polpette di carne servite con una salsa di pomodoro e basilico.'
              ],
              [
                'name'=> 'Salmon Teriyaki',
                'price'=> 16.00,
                'ingredients'=> 'Filetto di salmone, salsa teriyaki, riso bianco',
                'description'=> 'Un succoso filetto di salmone glassato con salsa teriyaki, servito con riso bianco.'
              ],
              [
                'name'=> 'Carpaccio di Manzo',
                'price'=> 13.50,
                'ingredients'=> 'Fettine di manzo crudo, rucola, parmigiano, olio EVO',
                'description'=> 'Fettine sottili di manzo crudo condite con rucola fresca, scaglie di parmigiano e olio EVO.'
              ],
              [
                'name'=> 'Paella Valenciana',
                'price'=> 18.50,
                'ingredients'=> 'Riso, pollo, gamberi, cozze, piselli, zafferano',
                'description'=> 'Una tradizionale paella spagnola con riso, pollo, gamberi, cozze, piselli e il distintivo sapore dello zafferano.'
              ],
              [
                'name'=> 'Salmone alla Griglia',
                'price'=> 15.00,
                'ingredients'=> 'Filetto di salmone, sale, pepe, succo di limone',
                'description'=> 'Un filetto di salmone alla griglia, condito con sale, pepe e succo di limone fresco.'
              ],
              [
                'name'=> 'Tortellini alla Panna',
                'price'=> 11.00,
                'ingredients'=> 'Tortellini ripieni di carne, panna, prosciutto, piselli',
                'description'=> 'Tortellini ripieni di carne serviti in una cremosa salsa di panna con aggiunta di prosciutto e piselli.'
              ],
              [
                'name'=> 'Insalata di Gamberi',
                'price'=> 14.00,
                'ingredients'=> 'Gamberi, lattuga, pomodori ciliegini, avocado, salsa rosa',
                'description'=> 'insalata fresca con gamberi succulenti, lattuga croccante, pomodorini, avocado e salsa rosa.'
              ],
              [
                'name'=> 'Fettuccine Alfredo',
                'price'=> 12.50,
                'ingredients'=> 'Fettuccine, panna, burro, parmigiano',
                'description'=> 'Un classico piatto di pasta con fettuccine condite con una cremosa salsa di panna, burro e parmigiano.'
              ],
              [
                'name'=> 'Arrosto di Maiale',
                'price'=> 16.00,
                'ingredients'=> 'Arrosto di maiale, patate al forno, verdure grigliate',
                'description'=> 'Un succulento arrosto di maiale servito con patate al forno e verdure grigliate.'
              ],
              [
                'name'=> 'Carpaccio di Salmone',
                'price'=> 13.50,
                'ingredients'=> 'Fettine di salmone crudo, salsa di agrumi, rucola',
                'description'=> 'Fettine sottili di salmone crudo condite con una salsa di agrumi e servite con rucola fresca.'
              ],
              [
                'name'=> 'Gnocchi alla Sorrentina',
                'price'=> 11.50,
                'ingredients'=> 'Gnocchi di patate, salsa di pomodoro, mozzarella, basilico',
                'description'=> 'Gnocchi di patate al forno con una deliziosa salsa di pomodoro, mozzarella filante e basilico fresco.'
              ],
              [
                'name'=> 'Insalata di Couscous',
                'price'=> 10.00,
                'ingredients'=> 'Couscous, pomodori, cetrioli, olive, feta, menta',
                'description'=> 'insalata leggera e fresca con couscous, pomodori, cetrioli, olive, feta e foglie di menta.'
              ],
              [
                'name'=> 'Burger Vegano',
                'price'=> 11.50,
                'ingredients'=> 'Bun vegano, polpetta vegetale, lattuga, pomodoro, cipolla, maionese vegana',
                'description'=> 'Un burger vegano con una gustosa polpetta vegetale, lattuga, pomodoro, cipolla e maionese vegana.'
              ],
              [
                'name'=> 'Sushi Vegano',
                'price'=> 16.00,
                'ingredients'=> 'Riso, verdure fresche, alga nori',
                'description'=> 'Una selezione di sushi vegano con riso e verdure fresche, avvolto in alga nori.'
              ],
              [
                'name'=> 'Pizza Margherita',
                'price'=> 10.00,
                'ingredients'=> 'Pizza base, salsa di pomodoro, mozzarella, basilico',
                'description'=> 'La classica pizza Margherita con salsa di pomodoro, mozzarella filante e foglie di basilico.'
              ],
              [
                'name'=> 'Cotoletta alla Milanese',
                'price'=> 14.50,
                'ingredients'=> 'Cotoletta di vitello, pangrattato, uovo, limone',
                'description'=> 'Una succulenta cotoletta di vitello impanata e fritta, servita con uno spruzzo di limone.'
              ],
              [
                'name'=> 'Insalata di Arance e Finocchi',
                'price'=> 9.50,
                'ingredients'=> 'Arance, finocchi, rucola, olive, olio EVO',
                'description'=> 'insalata fresca con arance dolci, finocchi croccanti, rucola, olive e olio EVO.'
              ],
              [
                'name'=> 'Spaghetti alla Carbonara',
                'price'=> 12.00,
                'ingredients'=> 'Spaghetti, uova, pancetta, pecorino romano, pepe',
                'description'=> 'Gli spaghetti conditi con una salsa cremosa a base di uova, pancetta croccante, formaggio pecorino e pepe nero macinato.'
              ],
              [
                'name'=> 'Osso Buco',
                'price'=> 18.00,
                'ingredients'=> 'Fette di manzo, midollo osseo, salsa di pomodoro, vino bianco',
                'description'=> 'Un gustoso piatto di fette di manzo brasato con midollo osseo, salsa di pomodoro e vino bianco.'
              ],
              [
                'name'=> 'Insalata di Rucola e Parmigiano',
                'price'=> 9.00,
                'ingredients'=> 'Rucola, scaglie di parmigiano, noci, aceto balsamico',
                'description'=> 'insalata semplice ma gustosa con rucola fresca, scaglie di parmigiano, noci tostate e condita con aceto balsamico.'
              ],
              [
                'name'=> 'Pizza Diavola',
                'price'=> 11.00,
                'ingredients'=> 'Pizza base, salsa di pomodoro, salame piccante, peperoncino, mozzarella',
                'description'=> 'Una pizza piccante con salsa di pomodoro, salame piccante, peperoncino e mozzarella filante.'
              ],
              [
                'name'=> 'Tagliolini ai Frutti di Mare',
                'price'=> 15.50,
                'ingredients'=> 'Tagliolini freschi, frutti di mare misti, aglio, prezzemolo, olio EVO',
                'description'=> 'Tagliolini freschi conditi con una selezione di frutti di mare, aglio, prezzemolo e olio EVO.'
              ],
              [
                'name'=> 'Insalata Caesar',
                'price'=> 10.50,
                'ingredients'=> 'Lattuga romana, pollo grigliato, crostini di pane, parmigiano, salsa Caesar',
                'description'=> 'insalata classica con lattuga romana, pollo grigliato, crostini di pane, scaglie di parmigiano e salsa Caesar.'
              ],
              [
                'name'=> 'Pasta al Pomodoro',
                'price'=> 11.00,
                'ingredients'=> 'Pasta corta, salsa di pomodoro, basilico, olio EVO',
                'description'=> 'Una semplice pasta con salsa di pomodoro, foglie di basilico fresco e un filo di olio EVO.'
              ],
              [
                'name'=> 'Ratatouille',
                'price'=> 12.00,
                'ingredients'=> 'Melanzane, zucchine, peperoni, pomodori, cipolla, aglio',
                'description'=> 'Una gustosa e colorata ratatouille con melanzane, zucchine, peperoni, pomodori, cipolla e aglio.'
              ],
              [
                'name'=> 'Crostini Misti',
                'price'=> 9.50,
                'ingredients'=> 'Pane tostato, varie bruschette, prosciutto, formaggio, olive',
                'description'=> 'Una selezione di crostini misti con diverse bruschette, accompagnate da prosciutto, formaggio e olive.'
              ],
              [
                'name'=> 'Gelato alla Vaniglia',
                'price'=> 7.00,
                'ingredients'=> 'Gelato alla vaniglia, topping a scelta (cioccolato, caramello, frutta)',
                'description'=> 'Una coppetta di gelato alla vaniglia con la possibilità di aggiungere un topping a scelta, come cioccolato, caramello o frutta fresca.'
              ],
              [
                'name'=> 'Zuppa di Pomodoro',
                'price'=> 8.50,
                'ingredients'=> 'Pomodori maturi, brodo di verdure, basilico, crostini di pane',
                'description'=> 'Una deliziosa zuppa di pomodoro preparata con pomodori maturi, brodo di verdure, basilico e servita con crostini di pane.'
              ],
              [
                'name'=> 'Panna Cotta',
                'price'=> 7.50,
                'ingredients'=> 'Panna, zucchero, gelatina, vaniglia, frutti di bosco',
                'description'=> 'Un dessert italiano classico, la panna cotta, preparata con panna, zucchero, gelatina, vaniglia e guarnita con frutti di bosco.'
              ]


            // Aggiungi gli altri cibi qui
        ];

        foreach ($foods as $foodData) {
            $newFood = new Food();
            $newFood->restaurant_id = $faker->randomElement($restaurant_ids);
            $newFood->name = $foodData['name'];
            $newFood->price = $foodData['price'];
            $newFood->ingredients = $foodData['ingredients'];
            $newFood->description = $foodData['description'];
            $newFood->visibility = 'public';
            $newFood->slug = Str::slug($newFood->name, '-');

            // Genera un'immagine casuale utilizzando il faker
            $imagePath = $faker->image('public/images/foods', 400, 300, null, false);
            $newFood->image = $imagePath;

            $newFood->save();
            $newFood->orders()->attach($faker->randomElements($orders_ids, rand(1, 6)), ['quantity' => 5]);
        }



    }
}
