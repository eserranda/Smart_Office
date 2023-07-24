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
        Schema::create('status_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ruangan')->required();
            $table->foreign('id_ruangan')->references('id')->on('ruangans');
            $table->string('status_dosen');
            $table->string('status_pintu');
            $table->string('status_lampu');
            $table->string('status_ac');
            $table->string('status_terminal');
            $table->string('sensor_gerak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_data');
    }
};
