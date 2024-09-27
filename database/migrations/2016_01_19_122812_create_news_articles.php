<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_articles', function (Blueprint $table) {
            $table->increments('id');
	    $table->text('title')->nullable();
	    $table->text('title_translation')->nullable();
	    $table->string('author')->default('Admin');
	    $table->text('content')->nullable();
	    $table->integer('status')->default(0);
            $table->integer('seo')->nullable()->unsigned();
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
        Schema::drop('news_articles');
    }
}
