<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Collection;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pustakas', function (Blueprint $table) {
            $table->id('pustaka_id');
            $table->string('judul');
            $table->string('author');
            $table->string('tema');
            $table->text('sinopsis');
            $table->date('tahun_terbit');
            $table->foreignId('budaya_id')->nullable()->constrained('budayas', 'budaya_id')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pustakas');
    }
};