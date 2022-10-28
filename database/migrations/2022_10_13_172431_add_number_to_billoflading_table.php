<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumberToBillofladingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billoflading', function (Blueprint $table) {
            $table->integer('number');
            $table->integer('warehouse_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('billoflading', function (Blueprint $table) {
            $table->dropColumn(['number','warehouse_id']);
        });
    }
}
