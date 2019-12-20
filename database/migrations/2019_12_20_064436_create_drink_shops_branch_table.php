<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkShopsBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_shops_branch', function (Blueprint $table) {
            $table->bigIncrements('branch_id');
            $table->string('drinkshop_code');
            $table->string('branch_name');
            $table->string('branch_info')->nullable();;
            $table->string('branch_address')->nullable();;
            $table->integer('branch_menu_id');
            $table->string('branch_phone_1');
            $table->string('branch_phone_2')->nullable();;
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
        Schema::dropIfExists('drink_shops_branch');
    }
}
