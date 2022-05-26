<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned()->nullable();
            $table->integer('belajar_id')->unsigned()->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('comment');
            $table->timestamps();
////            $table->integer('user_id')->unsigned();
//            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->integer('parent_id')->unsigned();
//            $table->text('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
