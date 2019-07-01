<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('permissionId');
            $table->unsignedBigInteger('roleId');
            $table->timestamps();
            $table->foreign('permissionId')
            ->references('id')->on('permissions')
            ->onDelete('cascade');
             $table->foreign('roleId')
             ->references('id')->on('roles')
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
        Schema::dropIfExists('role__permission');
    }
}
