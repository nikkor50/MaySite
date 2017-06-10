<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->date('purchased_at');
            $table->string('productid');
            $table->string('productname');
            $table->float('JPY_price');
            $table->integer('purchase_count');
            $table->float('JPY_amount');
            $table->float('exchange');
            $table->string('purchase_from');
            $table->string('payment_type');
            $table->float('payment_amount');
            $table->float('shipping_cost');
            $table->string('shipping_type');
            $table->string('flag');
            $table->string('status');
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
        Schema::drop('purchases');
    }
}
