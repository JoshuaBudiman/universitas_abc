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
        Schema::create('mahasiswamatakuliahs', function (Blueprint $table) {
            $table->id('mahasiswa_matkul_id');
            $table->float('afl1')->default('0.0');
            $table->float('afl2')->default('0.0');
            $table->float('afl3')->default('0.0');
            $table->float('alp')->default('0.0');
            $table->foreignId('matakuliah_id')->constrained('matakuliahs', 'matakuliah_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas', 'mahasiswa_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswamatakuliahs');
    }
};
