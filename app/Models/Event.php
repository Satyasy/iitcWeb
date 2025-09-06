<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'event_id';

    protected $fillable = [
        'nama',
        'tanggal',
        'lokasi_id',
        'deskripsi',
        'harga_tiket',
        'foto',
        'jadwal',
    ];

    public function lokasi() // Diubah dari lokasis() menjadi singular lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id', 'lokasi_id');
    }
}