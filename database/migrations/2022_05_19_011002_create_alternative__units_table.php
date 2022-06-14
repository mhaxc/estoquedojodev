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
        Schema::create('alternative__units', function (Blueprint $table) {
           
            $table->double('qtd');
            $table->char('divide_or_multiply');
            //chaves estrangeiras
            $table->integer('bulk_slug');
            $table->integer('product_id');
            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('bulk_slug')->references('bulk')->on('slug');
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
        Schema::dropIfExists('alternative__units');
    }
};
