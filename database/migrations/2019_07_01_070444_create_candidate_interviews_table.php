<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_interview', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('candidateId');
            $table->unsignedBigInteger('interviewId');
            $table->timestamps();
            $table->foreign('candidateId')
            ->references('id')->on('candidates')
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
        Schema::dropIfExists('candidate_interview');
    }
}
