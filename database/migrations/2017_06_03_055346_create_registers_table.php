<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ApplicantInfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('UserName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('Name');
            $table->string('FatherName');
            $table->string('MotherName');
            $table->date('DateOfBirth');
            $table->rememberToken();
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
        Schema::dropIfExists('ApplicantInfo');
        Schema::dropIfExists('register_users');
    }
}
