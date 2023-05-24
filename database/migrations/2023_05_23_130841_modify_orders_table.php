<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('orders', 'telephone_number')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('telephon_number');
                $table->string('telephone_number', 10)->nullable(false);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('orders', 'telephone_number')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('telephone_number');
                $table->tinyInteger('telephon_number')->nullable(false);
            });
        }
    }
}
