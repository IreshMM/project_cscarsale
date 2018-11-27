<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBestOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('best_offers', function (Blueprint $table) {
            $table->unsignedInteger('id_car_listing');
            $table->primary('id_car_listing');

            $table->foreign('id_car_listing')->references('id_car_listing')->on('car_listing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('best_offers');
    }
}
