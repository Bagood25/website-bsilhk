<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique(); // Slug untuk URL, harus unik
            $table->string('gambar')->nullable(); // Nama file gambar
            $table->text('isi');
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->unsignedBigInteger('penulis_id')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
            
            // Definisi foreign keys jika diperlukan
            // $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('set null');
            // $table->foreign('penulis_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
