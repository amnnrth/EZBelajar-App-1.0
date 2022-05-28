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
        Schema::create('bank_soals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
//            $table->string('soal');
            $table->string('filePath');
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
        Schema::dropIfExists('bank_soals');
    }
};
