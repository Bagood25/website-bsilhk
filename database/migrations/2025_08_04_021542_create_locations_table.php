<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('latitude');
            $table->double('longitude');
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Putar balik migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};