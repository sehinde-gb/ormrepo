<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->unsigned();
            $table->string('title');
            $table->string('series');
            $table->binary('feat_image');
            $table->text('body');
            $table->string('slug')->unique()->nullable();
            $table->integer('reads')->default(0);
            $table->integer('latest')->default(0);
            $table->timestamp('published_at')->nullable();
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
        Schema::drop('blogs');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
