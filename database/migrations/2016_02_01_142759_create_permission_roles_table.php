<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_roles', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('permission')->unsigned();
	    $table->integer('role')->unsigned();
            $table->timestamps();
            $table->foreign('permission')->references('id')->on('permissions');
            $table->foreign('role')->references('id')->on('roles');
            $table->unique(['permission', 'role']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permission_roles');
    }
}
