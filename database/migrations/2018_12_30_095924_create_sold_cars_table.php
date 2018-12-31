<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoldCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sold_cars', function (Blueprint $table) {
            $table->increments('id_sold_car');
            $table->string('condition');
            $table->unsignedInteger('mileage');
            $table->string('color');
            $table->longText('seller_description');
            $table->year('year');
            $table->integer('images');
            $table->string('city');
            $table->unsignedInteger('id_car_model');
            $table->timestamps();

            $table->foreign('id_car_model')->references('id_car_model')->on('car_model');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sold_cars');
    }
}
