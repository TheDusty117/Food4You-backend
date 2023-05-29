<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Orders extends Model
{
    protected $fillable = ['name', 'address', 'order_price', 'mail', 'telephone_number', 'status'];


    public function foods()
{
    return $this->belongsToMany(Food::class, 'food_orders', 'order_id', 'food_id')
               ->withPivot('quantity');
}

}
