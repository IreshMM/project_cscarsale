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
        Schema::create('sold_car', function (Blueprint $table) {
            $table->increments('id_car_listing');
            $table->string('condition');
            $table->unsignedInteger('mileage');
            $table->string('color');
            $table->longText('seller_description');
            $table->year('year');
            $table->integer('images');
            $table->string('city');
            $table->unsignedInteger('id_car_model');
            $table->unsignedInteger('id_buyer');
            $table->unsignedInteger('id_seller');
            $table->date('date');
            $table->timestamps();

            $table->foreign('id_car_model')->references('id_car_model')->on('car_model');
            $table->foreign('id_buyer')->references('id')->on('buyer');
            $table->foreign('id_seller')->references('id')->on('users');
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
