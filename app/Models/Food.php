<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Restaurant;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Food extends Model
{
    protected $fillable = ['name', 'price', 'ingredients', 'description', 'vegan', 'spicy', 'availability', 'visibility', 'slug', 'restaurant_id', 'image'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($food) {
            $food->slug = self::generateUniqueSlug($food->name);
        });
    }

    private static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name, '-');
        $counter = 0;
        $originalSlug = $slug;

        // Check if the slug already exists in the table
        while (self::where('slug', $slug)->exists()) {
            $counter++;
            $slug = $originalSlug . '-' . $counter;
        }

        return $slug;
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'food_orders', 'food_id', 'order_id')
            ->withPivot('quantity');
    }

    use HasFactory;
    use SoftDeletes;
}
