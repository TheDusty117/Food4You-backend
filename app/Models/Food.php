<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Restaurant;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;






class Food extends Model
{

    protected $fillable = ['name', 'price', 'ingredients', 'description', 'vegan', 'spicy', 'availability', 'visibility', 'slug', 'restaurant_id', 'image'];


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders()
{
    return $this->belongsToMany(Order::class, 'food_orders', 'food_id', 'order_id')
               ->withPivot('quantity');
}


    // use HasFactory;
    use SoftDeletes;
}
