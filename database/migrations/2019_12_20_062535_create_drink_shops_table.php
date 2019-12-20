<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_shops', function (Blueprint $table) {
            $table->bigIncrements('drinkshop_id');
            $table->string('drinkshop_code');
            $table->string('drinkshop_name');
            $table->string('drinkshop_info');
            $table->integer('drinkshop_default_branch');
            $table->integer('sort');
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
        Schema::dropIfExists('drink_shops');
    }
}
