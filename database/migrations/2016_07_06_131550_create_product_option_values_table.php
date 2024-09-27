<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_option_values', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->notNull();
            $table->integer('product_option_id')->unsigned()->notNull();
            
            $table->string('name')->notNull();
            
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_option_id')->references('id')->on('product_options');
            $table->unique(['product_option_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_option_values');
    }
}
