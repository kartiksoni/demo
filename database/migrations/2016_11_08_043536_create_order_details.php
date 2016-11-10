<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
        $table->increments('order_id');
        $table->integer('customer_id');
        $table->string('name');
        $table->string('email');
        $table->text('total');
        $table->text('tax');
        $table->integer('order_items');
        $table->string('status');
        $table->integer('shipping_id');
        $table->text('roomno');
        $table->string('hotel_name');
        $table->string('address1');
        $table->string('city');
        $table->string('state');
        $table->string('country');
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
        //
    }
}
