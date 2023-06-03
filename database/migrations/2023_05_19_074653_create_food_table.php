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
            $table->string('image_food')->nullable();
            $table->string('name', 100)->unique();
            $table->decimal('price', 6, 2)->nullable();
            $table->string('ingredients', 150)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('vegan')->default(0);
            $table->tinyInteger('spicy')->default(0);
            $table->string('visibility')->default('public');
            //slug
            $table->string('slug');
            //softdeletes
            $table->softDeletes();

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
