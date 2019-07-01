<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('image');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('technicalSkill');
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
        Schema::dropIfExists('interviewers');
    }
}
