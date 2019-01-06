<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarSpecificationValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_specification_value', function (Blueprint $table) {
            $table->increments('id_car_specification_value');
            $table->string('value');
            $table->string('unit');
            $table->unsignedInteger('id_car_specification');
            $table->unsignedInteger('id_car_model');

            $table->foreign('id_car_model')->references('id_car_model')->on('car_model');
            $table->foreign('id_car_specification')->references('id_car_specification')->on('car_specification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_specification_value');
    }
}
