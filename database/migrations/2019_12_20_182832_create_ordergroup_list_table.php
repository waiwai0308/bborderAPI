<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdergroupListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordergroup_list', function (Blueprint $table) {
            $table->uuid('ordergroup_id')->primary()->nullable();
            $table->integer('branch_id');
            $table->string('ordergroup_pw')->nullable();
            $table->string('ordergroup_title')->nullable();
            $table->integer('ordergroup_info')->nullable();
            $table->dateTime('ordergroup_start_time')->nullable();
            $table->dateTime('ordergroup_end_time')->nullable();
            $table->string('ordergroup_status')->nullable();
            $table->uuid('owner_id')->nullable();
            $table->string('owner_name')->nullable();
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
        Schema::dropIfExists('ordergroup_list');
    }
}
