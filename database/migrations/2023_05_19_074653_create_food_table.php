<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    private $tableName = 'food';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name', 100)->unique();
            $table->decimal('price', 6, 2)->nullable();
            $table->string('ingredients', 150)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('vegan')->default(0);
            $table->tinyInteger('spicy')->default(0);
            $table->string('visibility')->default('public');
            $table->string('slug')->unique();
            $table->softDeletes();
            $table->timestamps();
        });

        // Generazione automatica dello slug e del valore di sequence
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE food AUTO_INCREMENT = 1");

        $foods = \Illuminate\Support\Facades\DB::table('food')
            ->orderBy('id')
            ->get();

        foreach ($foods as $index => $food) {
            $sequence = $index + 1;
            \Illuminate\Support\Facades\DB::table('food')
                ->where('id', $food->id)
                ->update(['sequence' => $sequence]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
};
