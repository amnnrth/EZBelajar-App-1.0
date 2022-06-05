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
        Schema::create('detail_bootcamps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bootcamp_id')->constrained()->onDelete('cascade');
            $table->string('registration');
            $table->string('duration');
            $table->string('media');
            $table->string('schedule');
            $table->integer('participant');
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
        Schema::dropIfExists('detail_bootcamps');
    }
};
