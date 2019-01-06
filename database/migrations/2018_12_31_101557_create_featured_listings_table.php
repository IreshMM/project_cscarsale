<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_listing', function (Blueprint $table) {
            $table->unsignedInteger('id_car_listing');
            $table->primary('id_car_listing');
            $table->timestamps();

            $table->foreign('id_car_listing')->references('id_car_listing')->on('car_listing')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('featured_listings');
    }
}
