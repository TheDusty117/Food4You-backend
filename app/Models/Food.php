<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\HasFactory;

class Food extends Model
{

    protected $fillable = ['name', 'price', 'ingredients', 'description', 'vegan', 'spicy', 'availability', 'visibility', 'slug'];


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function order()
    {
        return $this->belongsToMany(Orders::class, 'order_id');
    }

    // use HasFactory;
    use SoftDeletes;
}
