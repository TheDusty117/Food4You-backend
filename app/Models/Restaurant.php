<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'telephone_number',
        'email',
        'vat',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function getFood()
    {
        return $this->hasMany(Food::class);
    }
}

//  questo commento serve a nulla