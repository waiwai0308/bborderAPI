<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkShopsMenuSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_shops_menu_specifications', function (Blueprint $table) {
            $table->bigIncrements('spec_id');
            $table->integer('menu_id');
            $table->string('spec_type');
            $table->integer('spec_name')->default(0);
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
        Schema::dropIfExists('drink_shops_menu_specifications');
    }
}
