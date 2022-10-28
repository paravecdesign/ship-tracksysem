<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilofladingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billoflading', function (Blueprint $table) {
            $table->id();
            $table->string('shipper_id')->nullable();
            $table->string('description')->nullable();
            $table->string('consignee_id')->nullable();
            $table->integer('courier_id')->nullable();
            $table->integer('notifyparty_id')->nullable();
            $table->integer('contactagent_id')->nullable();
            $table->integer('other_id')->nullable();
            $table->string('weight')->nullable();
            $table->string('bl_number')->nullable();
            $table->string('reference')->nullable();
            $table->string('consignment')->nullable();
            $table->string('preCarriageBy')->nullable();
            $table->string('placeOfReceipt')->nullable();
            $table->string('vessel')->nullable();
            $table->string('voyageNo')->nullable();
            $table->string('portOfLeading')->nullable();
            $table->string('PortOfDischarge')->nullable();
            $table->string('placeOfLeading')->nullable();
            $table->string('placeOfDelivery')->nullable();
            $table->string('freightTeams')->nullable();
            $table->string('shippedBoardDate')->nullable();
            $table->string('placeDateOfIssue')->nullable();
            $table->string('termConditions')->nullable();
            $table->string('marknumber')->nullable();
            $table->string('kindpackages')->nullable();
            $table->string('freightamount')->nullable();
            $table->string('measurement')->nullable();
            $table->string('vesselflag')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biloflading');
    }
}
