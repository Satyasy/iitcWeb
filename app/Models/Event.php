<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'lokasi_id', 'lokasi_id');
    }
}