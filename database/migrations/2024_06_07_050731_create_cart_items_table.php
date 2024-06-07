<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->integer('unit_price');
            $table->integer('quantity');
            $table->integer('total');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
};
