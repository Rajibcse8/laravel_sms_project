<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->integer('purchase_amount');
            $table->integer('purchase_quantity');
            $table->string('purchase_type');
            $table->date('doc');
            $table->unsignedBigInteger('creater_purchase_id');
            $table->foreign('creater_purchase_id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
