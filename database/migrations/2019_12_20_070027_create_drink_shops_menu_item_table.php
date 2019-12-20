<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkShopsMenuItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_shops_menu_item', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->integer('category_id');
            $table->string('item_name');
            $table->integer('item_price')->default(0);
            $table->integer('item_price_s')->default(0);
            $table->integer('item_price_m')->default(0);
            $table->integer('item_price_l')->default(0);
            $table->integer('item_price_xl')->default(0);
            $table->integer('item_price_c')->default(0);
            $table->tinyInteger('item_default_sugar')->default(0);
            $table->tinyInteger('item_season_only')->default(0);
            $table->tinyInteger('item_hot_only')->default(0);
            $table->string('item_free_ingredient')->default(0);
            $table->tinyInteger('item_recommend')->default(0);
            $table->string('display');
            $table->integer('sort')->default(0);
            $table->dateTime('updated_at')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drink_shops_menu_item');
    }
}
