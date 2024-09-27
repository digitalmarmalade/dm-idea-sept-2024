<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_options', function(Blueprint $table) {
            $table->increments('id');
            
            $table->integer('product_id')->unsigned()->notNull();
            $table->string('name')->notNull();
            
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products');
            $table->unique(['product_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_options');
    }
}
