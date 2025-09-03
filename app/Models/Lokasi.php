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
        'nama',
        'alamat',
        'deskripsi',
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'lokasi_id', 'lokasi_id');
    }

    public function makanans()
    {
        return $this->hasMany(Makanan::class, 'lokasi_id', 'lokasi_id');
    }
}
