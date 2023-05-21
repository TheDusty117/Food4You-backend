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
    ];


    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
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
