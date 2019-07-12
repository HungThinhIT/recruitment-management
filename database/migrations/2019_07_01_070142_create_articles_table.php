<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('image')->nullable();
            $table->unsignedBigInteger('jobId');
            $table->longText('content');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('catId');
            $table->timestamps();
            $table->foreign('userId')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('catId')
            ->references('id')->on('categories')
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
        Schema::dropIfExists('articles');
    }
}
