<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('client_id')->unsigned();
            $table->integer('quantity');
            $table->date('startdate');
            $table->date('enddate');
            $table->unsignedBigInteger('seller_id')->unsigned();
            $table->tinyInteger('sell_status')->unsigned();

            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sells');
    }
}
