<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('merek', 16);
            $table->string('tipe', 32);
            $table->string('warna', 16);
            $table->tinyInteger('jumlah_roda');
            $table->string('nomor_mesin', 64);
            $table->string('gambar', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};