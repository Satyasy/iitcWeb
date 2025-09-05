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
            $table->increments('budaya_id');
            $table->string('name');
            $table->string('foto')->nullable();
            $table->enum('jenis', ['Pakaian', 'Tari', 'Ritual', 'Seni', 'Upacara', 'Makanan', 'Bahasa', 'Lainnya']);
            $table->text('deskripsi');
            $table->foreignId('asal_daerah')->constrained('lokasis', 'lokasi_id')->onDelete('cascade');
            $table->enum('status', ['aktif', 'hampir punah', 'punah'])->default('aktif');
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