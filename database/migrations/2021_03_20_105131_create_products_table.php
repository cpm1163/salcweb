<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('brand')->nullable();
            $table->string('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('image_cover')->nullable();
            $table->string('image_thumbnail')->nullable();
            $table->double('price', 10,2)->default('0.01');
            $table->boolean('active')->default('1');
        
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
        Schema::dropIfExists('products');
    }
}
