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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('explanation');
            $table->enum('is_active', ['0', '1'])->default('1');
            $table->foreignId('bank_soal_id')->references('id')->on('bank_soals')->onDelete('cascade');
//            $table->foreignId('bank_soal_id')->constrained()->onDelete('cascade');
//            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('questions');
    }
};
