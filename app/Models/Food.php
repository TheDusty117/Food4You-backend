<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    protected $filable = ['name','price','ingredients','description','vegan','spicy','availability','visibility'];



    // use HasFactory;

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

}
