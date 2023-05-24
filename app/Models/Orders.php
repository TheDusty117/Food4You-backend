<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['name', 'address', 'order_price', 'mail', 'telephone_number', 'status'];


    public function food()
    {
        return $this->belongsToMany(Food::class, 'food_id');
    }
}
