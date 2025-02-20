<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sec_twos', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('txt_1');
            $table->string('txt_2');
            $table->string('txt_3');
            $table->string('txt_4');
            $table->string('txt_5');
            $table->string('txt_6');
            $table->string('title_2');
            $table->string('txt2_1');
            $table->string('txt2_2');
            $table->string('txt2_3');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sec_twos');
    }
};
