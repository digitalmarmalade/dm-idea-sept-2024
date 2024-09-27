<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
	    $table->text('name')->nullable();
	    $table->integer('seo')->nullable()->unsigned();
	    $table->longText('content');
            $table->foreign('seo')->references('id')->on('seos');
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
        Schema::drop('pages');
    }
}
