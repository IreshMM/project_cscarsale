<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('email');
            $table->string('username_email');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position');
            $table->string('mobile');
            $table->string('land_line');
            $table->string('address');
            $table->string('gender');
            $table->string('hire_date');
            $table->string('dob');
            $table->string('nic');
            $table->string('bank_account');
            $table->string('branch');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
