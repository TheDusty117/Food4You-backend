<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;


class RestaurantController extends Controller
{
    public function index(){

        $restaurants = Restaurant::with('categories')->paginate(20);


        return response()->json([
            'success' => true,
            'results' => $restaurants,
        ]);
    }
  
      public function show($slug){

        $restaurant = Restaurant::with(['categories','food'])->where('slug',$slug)->first();



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


    public function getRestaurants($category){

        if ($category!=0 ){
            $restaurants=Restaurant::whereHas('categories', function ($query)use($category) {
                return $query->where('id', '=', $category);
            })->paginate(20);
        } else {
            $restaurants = Restaurant::with('categories')->paginate(20);
        }

        return response()->json([
            'success' => true,
            'results' => $restaurants,
        ]);

    }


}
