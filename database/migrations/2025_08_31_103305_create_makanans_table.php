<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('makanans', function (Blueprint $table) {
            $table->BigIncrements('makanan_id');
            $table->string('foto')->nullable();
            $table->string('nama');
            // Hapus ->after('nama') dari baris di bawah ini
            $table->enum('jenis', ['makanan', 'minuman'])->default('makanan');
            $table->text('deskripsi');
            $table->foreignId('lokasi_id')->constrained('lokasis', 'lokasi_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanans');
    }
};