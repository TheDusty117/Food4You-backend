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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100)->notnull();
            $table->string('address', 150)->notnull();
            $table->string('telephone_number', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('vat', 11)->notnull();

             //slug
            $table->string('slug');
            
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
        Schema::dropIfExists('restaurants');
    }
};

