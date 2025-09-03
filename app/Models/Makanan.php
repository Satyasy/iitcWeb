<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{

    protected $primaryKey = 'makanan_id';
    protected $fillable = ['nama_makanan', 'deskripsi', 'image', 'lokasi_id', 'user_id'];
    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }
    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'lokasi', 'lokasi_id');
    }
}