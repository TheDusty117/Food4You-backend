<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);
            $table->decimal('price', 6,2);
            $table->string('ingredients', 150);
            $table->text('description');
            $table->tinyInteger('vegan')->default(0);
            $table->tinyInteger('spicy')->default(0);
            $table->tinyInteger('availability')->default(1);
            $table->tinyInteger('visibility')->default(1);

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
        Schema::dropIfExists('food');
    }
};
