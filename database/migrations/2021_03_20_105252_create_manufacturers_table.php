<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('cpf_cnpj')->nullable();
            $table->string('description')->nullable();
            $table->string('contact')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');


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
        Schema::dropIfExists('manufacturers');
    }
}
