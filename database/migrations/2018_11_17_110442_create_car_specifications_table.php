<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_specification', function (Blueprint $table) {
            $table->increments('id_car_specification');
            $table->string('name');
            $table->unsignedInteger('id_car_specification_type');
            $table->timestamps();

            $table->foreign('id_car_specification_type')->references('id_car_specification_type')->on('car_specification_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_specification');
    }
}
