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
            $table->bigIncrements('id');
            $table->integer('prod_id');
            $table->integer('merch_id');
            $table->string('seller_id');
            $table->string('buyer_id');
            $table->text('prod_img');
            $table->text('prod_name');
            $table->integer('qnty');
            $table->integer('unit_price');
            $table->integer('tot_price');
            $table->integer('discount_id');
            $table->integer('discount_coupon');
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
