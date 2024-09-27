<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('name');
	    $table->text('title')->nullable();
	    $table->text('title_translation')->nullable();
	    $table->text('keywords')->nullable();
	    $table->text('keywords_translation')->nullable();
	    $table->text('description')->nullable();
	    $table->text('description_translation')->nullable();
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
        Schema::drop('seos');
    }
}
