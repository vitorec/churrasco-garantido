<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('company_id')->references('id')->on('companies');
            $table->timestamps();
        });

        Schema::create('order_product', function (Blueprint $table) {
            $table->integer('order_id')->references('id')->on('orders');
            $table->integer('product_id')->references('id')->on('products');
            $table->integer('qtd');
            $table->primary(['order_id', 'product_id']);
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
        Schema::dropIfExists('order_product');
    }
}
