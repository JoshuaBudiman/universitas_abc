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
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id('matakuliah_id');
            $table->string('nama_matakuliah');
            $table->string('hari');
            $table->string('mulai_kelas');
            $table->string('akhir_kelas');
            $table->integer('sks_matakuliah');
            $table->string('ruang_kelas');
            $table->foreignId('dosen_id')->constrained('dosens', 'dosen_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
};
