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
        Schema::create('salvajina', function (Blueprint $table) {
            $table->id();
            $table->string('alfluCvc')->nulable();
            $table->string('alfluCelsia')->nulable();
            $table->string('tributarioCvc')->nulable();
            $table->string('nivelMax')->nulable();
            $table->string('nivelMin')->nulable();
            $table->string('efluMax')->nulable();
            $table->string('efluMin')->nulable();
            $table->date('diaSelec')->nulable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salvajina');
    }
};
