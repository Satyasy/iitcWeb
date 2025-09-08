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
    Schema::create('budayas', function (Blueprint $table) {
        $table->BigIncrements('budaya_id');
        $table->string('foto')->nullable();
        $table->string('nama_budaya');
        $table->string('kategori');
        $table->text('deskripsi');
        
        // PENTING: Gunakan 'foreignId' untuk tipe data yang kompatibel
        $table->foreignId('asal_daerah')->constrained('lokasis', 'lokasi_id')->onDelete('cascade');
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budayas');
    }
};