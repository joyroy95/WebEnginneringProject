<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_infos', function (Blueprint $table) {
            $table->integer('RegistrationNo');
            $table->string('ExamName');
            $table->string('Institute');
            $table->string('Center');
            $table->string('RollNo');
            $table->string('Board');
            $table->string('GroupName');
            $table->string('SessionYear');
            $table->string('Type');
            $table->string('Result');
            $table->float('GPA', 3, 2);
            $table->integer('id')->unsigned();
            $table->primary('RegistrationNo');
            $table->foreign('id')->references('id')->on('ApplicantInfo')->onDelete('cascade');
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
        Schema::dropIfExists('exam_infos');
    }
}
