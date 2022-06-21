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
        Schema::create('belajars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('cover');
            $table->string('link');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('is_active', ['0', '1'])->default('1')->nullable();
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
        Schema::dropIfExists('belajars');
    }
};
