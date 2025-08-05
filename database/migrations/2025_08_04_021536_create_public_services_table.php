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
        Schema::create('public_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('form_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Putar balik migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_services');
    }
};
