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
            $table->integer('charge_id')->unsigned();
            $table->foreign('charge_id')->references('id')->on('charges');
            $table->string('order_number');
            $table->string('email');
            $table->string('onetimeurl')->nullable();
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('orders');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
