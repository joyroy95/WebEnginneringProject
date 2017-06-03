<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousExamResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previousExamResults', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('RegistrationNo')->unsigned;
            $table->string('Subject');
            $table->float('Grade', 3, 2);
            $table->string('ExamName');
            $table->foreign('RegistrationNo')->references('RegistrationNo')->on('exam_infos')->onDelete('cascade');
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
        Schema::dropIfExists('previousExamResults');
    }
}
