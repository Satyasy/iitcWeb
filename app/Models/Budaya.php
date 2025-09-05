<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lokasi;

class Budaya extends Model
{
    use HasFactory;

    protected $table = 'budayas';
    protected $primaryKey = 'budaya_id';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'budaya_id', 'budaya_id');
    }

    public function lokasi()
    {
        // foreignId('asal_daerah')->constrained('lokasis', 'lokasi_id')
        return $this->belongsTo(Lokasi::class, 'asal_daerah', 'lokasi_id');
    }

    public function pustaka()
    {
        return $this->hasMany(Pustaka::class, 'budaya_id', 'budaya_id');
    }
}