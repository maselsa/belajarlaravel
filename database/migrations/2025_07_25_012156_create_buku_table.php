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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul',128)->unique();
            $table->string('penulis',64);
            $table->string('cover',255)->nullable();
            $table->smallinteger('jumlah_halaman')->unigsned()->nullable;
            $table->string('penerbit',88);
            $table->year('tahun_terbit', 4)->nullable();
            $table->text('sinopsis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
