<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_candidate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('candidateId');
            $table->unsignedBigInteger('jobId');
            $table->timestamps();
            $table->foreign('candidateId')
            ->references('id')->on('candidates')
            ->onDelete('cascade');
            $table->foreign('jobId')
            ->references('id')->on('jobs')
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
        Schema::dropIfExists('job_candidate');
    }
}
