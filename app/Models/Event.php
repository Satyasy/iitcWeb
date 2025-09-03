<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'event_id';
    protected $fillable = ['nama_event', 'jadwal', 'deskripsi', 'harga', 'lokasi_id'];


    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'lokasi_id', 'lokasi_id');
    }
}