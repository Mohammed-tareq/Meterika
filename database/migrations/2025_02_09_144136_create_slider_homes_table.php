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
        Schema::create('slider_homes', function (Blueprint $table) {
            $table->id();
            $table->string( 'slider_img_one');
            $table->string( 'slider_img_two');
            $table->string( 'slider_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider_homes');
    }
};
