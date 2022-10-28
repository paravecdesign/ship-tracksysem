<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHDLMBLToBillofladingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billoflading', function (Blueprint $table) {
            $table->string('hbl_number')->nullable();
            $table->string('mbl_number')->nullable();
            $table->string('commodity')->nullable();
            $table->string('carriercode')->nullable();
            $table->string('bookingnumber')->nullable();
            $table->string('departure')->nullable();
            $table->string('asycudanumber')->nullable();
            $table->string('wharfinger')->nullable();
            $table->string('finalDestination')->nullable();
            $table->string('reported_date')->nullable();
            $table->string('portofloading')->nullable();
              $table->string('whagent')->nullable();
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
            $table->dropColumn(['mbl_number', 'hbl_number','commodity',
            'carriercode','bookingnumber','departure','asycudanumber',
            'wharfinger','finalDestination','reported_date','whagent']);
        });
    }
}
