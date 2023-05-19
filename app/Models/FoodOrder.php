<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodOrder extends Model
{
    // Nome della tabella nel database
    protected $table = 'food_orders';

    // Disabilita i timestamp
    public $timestamps = false;

    // Chiave primaria composta
    protected $primaryKey = ['food_id', 'order_id'];

    // Disabilita l'incremento automatico della chiave primaria
    public $incrementing = false;

    // Relazione con il modello "Food"
    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }

    // Relazione con il modello "Orders"
    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }
}
