<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewInterviewerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_interviewer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('interviewerId');
            $table->unsignedBigInteger('interviewId');
            $table->timestamps();
            $table->foreign('interviewerId')
            ->references('id')->on('interviewers')
            ->onDelete('cascade');
            $table->foreign('interviewId')
            ->references('id')->on('interviews')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interview_interviewer');
    }
}
