<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{

    protected $filable = ['name','price','ingredients','description','vegan','spicy','availability','visibility'];


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }


    use HasFactory, SoftDeletes;

}
