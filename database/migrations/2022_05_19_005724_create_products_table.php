<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->double('price');
            $table->string('description');
            $table->string('color');
            $table->double('qtd');
            $table->double('height');
            $table->double('width');
            $table->double('depth');
             //chaves  strangeiras
            $table->integer('category_id');
            $table->integer('bulks_slug');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->tinyInteger('active');
            $table->foreign('bulks_slug')->references('id')->on('bulks');
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
};
