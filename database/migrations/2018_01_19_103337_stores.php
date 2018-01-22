<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id',10)->nullable();
            $table->string('store_name',150)->nullable();
            $table->string('products_selling',150)->nullable();
            $table->decimal('base_cost', 8, 2)->nullable();
            $table->string('location',150)->nullable();
            $table->string('account_status',50)->nullable();
            $table->string('point_of_contact',50)->nullable();
            $table->string('phone_number',50)->nullable();
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
        //
    }
}
