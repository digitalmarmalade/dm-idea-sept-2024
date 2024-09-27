<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVariationOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variation_options', function(Blueprint $table) {
            $table->increments('id');
            
            $table->integer('product_id')->unsigned()->notNull();
            $table->integer('product_variation_id')->unsigned()->notNull();
            $table->integer('product_option_id')->unsigned()->notNull();
            $table->integer('product_option_value_id')->unsigned()->notNull();
            
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_variation_id')->references('id')->on('product_variations');
            $table->foreign('product_option_id')->references('id')->on('product_options');
            $table->foreign('product_option_value_id')->references('id')->on('product_option_values');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_variation_options');
    }
    
}
