<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkShopsMenuCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_shops_menu_category', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->integer('menu_id');
            $table->string('category_name');
            $table->string('category_info')->nullable();
            $table->string('category_tag')->default('');
            $table->string('display');
            $table->integer('sort')->default(0);;
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
        Schema::dropIfExists('drink_shops_menu_category');
    }
}
