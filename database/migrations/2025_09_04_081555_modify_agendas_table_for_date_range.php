<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('agendas', function (Blueprint $table) {
            // Ganti nama kolom 'tanggal' menjadi 'tanggal_mulai'
            $table->renameColumn('tanggal', 'tanggal_mulai');

            // Tambahkan kolom baru 'tanggal_selesai' yang bisa kosong
            $table->date('tanggal_selesai')->nullable()->after('tanggal');
        });
    }

    public function down(): void
    {
        Schema::table('agendas', function (Blueprint $table) {
            $table->renameColumn('tanggal_mulai', 'tanggal');
            $table->dropColumn('tanggal_selesai');
        });
    }
};