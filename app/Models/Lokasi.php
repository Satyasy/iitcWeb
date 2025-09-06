<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasis';
    protected $primaryKey = 'lokasi_id';

    protected $fillable = [
        'lokasi_id',
        'nama',
        'alamat',
    ];

    public function event()
    {
        return $this->hasMany(Event::class, 'lokasi_id', 'lokasi_id');
    }

    public function makanan()
    {
        return $this->hasMany(Makanan::class, 'lokasi_id', 'lokasi_id');
    }

    public function budaya()
    {
        return $this->hasMany(Budaya::class, 'asal_daerah', 'lokasi_id');
    }
}