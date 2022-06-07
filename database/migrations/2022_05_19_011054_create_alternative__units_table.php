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
            $table->char('divide_or_multiply',1);
            $table->integer('bulk_slug');
             $table->integer('product_id');
            $table->foreign('products')->references('id')->on('product');
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
        Schema::dropIfExists('alternative__units');
    }
};
