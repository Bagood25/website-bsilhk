<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            // Hapus kolom thumbnail
            $table->dropColumn('thumbnail');
        });
    }

    public function down(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            // Jika rollback, buat kembali kolomnya
            $table->string('thumbnail')->nullable()->after('youtube_url');
        });
    }
};