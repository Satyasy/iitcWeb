<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }
    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'lokasi', 'lokasi_id');
    }
}