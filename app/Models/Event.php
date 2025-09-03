<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events'; // singular
    protected $primaryKey = 'event_id';

    protected $fillable = [
        'nama',
        'tanggal',
        'lokasi_id',
    ];

    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id', 'lokasi_id');
    }
}
