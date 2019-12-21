<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdergroupOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordergroup_order_item', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->uuid('ordergroup_id')->nullable();
            $table->integer('order_item_id')->nullable();
            $table->string('order_item_name')->nullable();
            $table->string('order_item_size')->nullable();
            $table->integer('order_item_ice_id')->nullable();
            $table->string('order_item_ice_name')->nullable();
            $table->integer('order_item_sugar_id')->nullable();
            $table->string('order_item_sugar_name')->nullable();
            $table->string('order_item_note')->nullable();
            $table->uuid('order_owner_id')->nullable();
            $table->string('order_owner_name')->nullable();
            $table->string('order_owner_pw')->nullable();
            $table->string('order_item_ingredient_id')->nullable();
            $table->string('order_item_ingredient_name')->nullable();
            $table->integer('order_item_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordergroup_order_item');
    }
}
