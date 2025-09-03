<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pustaka extends Model
{
    use HasFactory;

    protected $table = 'pustakas'; // singular
    protected $primaryKey = 'pustaka_id';

    protected $fillable = [
        'judul',
        'penulis',
        'tahun',
        'budaya_id',
    ];

    public function budayas()
    {
        return $this->belongsTo(Budaya::class, 'budaya_id', 'budaya_id');
    }
}
