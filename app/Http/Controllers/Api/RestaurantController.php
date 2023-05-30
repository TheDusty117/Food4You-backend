<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::with('categories')->paginate(5);

        return response()->json([
            'success' => true,
            'results' => $restaurants,
        ]);
    }


    public function show($slug){

        $restaurant = Restaurant::with('categories.restaurants')->where('slug',$slug)->first();



        if ($restaurant) {
             return response()->json([
                 'success' => true,
                 'restaurant' => $restaurant
             ]);
         } else {
             return response()->json([
                 'success' => false,
                 'error' => 'Nessun ristorante trovato'
             ]);
        }
    }


}
