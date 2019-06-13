<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname', 30);
            $table->string('lastname', 30);
            $table->string('username', 50);
            $table->string('password', 30);
            $table->string('email', 30);
            $table->string('mobile', 15);
            $table->string('conf_password', 30);
            $table->enum('gender', array('Male', 'Female'));
            $table->date('dob');
            $table->dateTime('created_on');
            $table->dateTime('updated_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
}
