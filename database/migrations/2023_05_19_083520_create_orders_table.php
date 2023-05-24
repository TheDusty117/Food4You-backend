<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('address', 150)->nullable(false);
            $table->string('name', 150)->nullable(false);
            $table->decimal('order_price', 8, 2)->nullable(false);
            $table->string('mail', 100)->nullable();
            $table->string('telephone_number', 15)->nullable(false);
            $table->tinyInteger('status')->default(1)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
