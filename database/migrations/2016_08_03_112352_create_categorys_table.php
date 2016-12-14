<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique()->nullable();
            $table->timestamps();
        });
        
        Schema::create('blog_category', function (Blueprint $table) {
            $table->integer('blog_id')->unsigned()->index();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade')->unsigned();

            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade')->unsigned();
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
        Schema::drop('categorys');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
