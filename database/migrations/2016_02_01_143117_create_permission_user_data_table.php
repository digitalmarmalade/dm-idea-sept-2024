<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_user_data', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('permission')->unsigned();
	    $table->integer('role')->unsigned();
	    $table->integer('value')->unsigned();
            $table->timestamps();
            $table->foreign('permission')->references('id')->on('permissions');
            $table->foreign('role')->references('id')->on('roles');
            $table->unique(['permission', 'role', 'value']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permission_user_data');
    }
}
