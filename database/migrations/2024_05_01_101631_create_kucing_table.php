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
        Schema::create('kucing', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('ras');
            $table->integer('umur')->default(0);
            $table->integer('berat')->default(0);
            $table->integer('harga')->default(0);
            $table->integer('stock')->default(0);
            $table->enum('kondisi',['lama','baru','bekas']);
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kucing');
    }
};
