<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('berita', function (Blueprint $table) {
            // Tambahkan kolom 'kategori' dengan tipe data string
            $table->string('kategori')->nullable()->after('slug');
        });
    }

    public function down(): void
    {
        Schema::table('berita', function (Blueprint $table) {
            // Hapus kembali kolom 'kategori' jika migrasi di-rollback
            $table->dropColumn('kategori');
        });
    }
};