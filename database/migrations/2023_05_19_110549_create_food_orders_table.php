<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('food_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('quantity');

            $table->foreign('food_id')->references('id')->on('food');
            $table->foreign('order_id')->references('id')->on('orders');

            $table->primary(['food_id', 'order_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('food_orders');
    }
}
