<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_id');
            $table->string('name')->nullable();
            $table->string('images')->nullable();
            $table->smallinteger('stock')->unsigned()->default();
            $table->string('unit', 4)->nullable();
            $table->double('price', 16, 2)->default();
            $table->double('discount', 16, 2)->default();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
