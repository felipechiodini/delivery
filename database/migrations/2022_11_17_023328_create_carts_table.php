<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('address_id')->references('id')->on('addresses');
            $table->foreignId('rating_id')->nullable()->references('id')->on('ratings');
            $table->foreignId('payment_id')->references('id')->on('payments');
            $table->float('subtotal');
            $table->float('delivery_tax');
            $table->float('discount');
            $table->float('total');
            $table->unsignedSmallInteger('rating')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
