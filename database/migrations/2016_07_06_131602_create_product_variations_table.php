<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variations', function(Blueprint $table) {
            $table->increments('id');
            
            $table->integer('product_id')->unsigned()->notNull();
            
            $table->string('name')->notNull();
            
            $table->string('sku', 10)->notNull();
            $table->decimal('price', 20, 2)->notNull();
            
            $table->integer('stock')->unsigned()->notNull();
            
            $table->string('image_filepath')->nullable();
            $table->string('image_filename')->nullable();
            $table->string('image_alt')->nullable();
            
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products');
            
            $table->index('sku');
            $table->index('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_variations');
    }
}
