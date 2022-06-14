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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->date('date');
            $table->char('type',1);
            $table->char('status',1);
            $table->string('observation',200);
            //chaves  strangeiras
            $table->integer('user_id');
            $table->integer('type_payments_id');
            $table->integer('customer_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->foreign('type_payments_id')->references('id')->on('type_payments');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
