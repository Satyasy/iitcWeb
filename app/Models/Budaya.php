<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;

    protected $table = 'budayas';
    protected $primaryKey = 'budaya_id';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function artikels()
    {
        return $this->hasMany(Artikel::class, 'budaya_id', 'budaya_id');
    }

    public function pustakas()
    {
        return $this->hasMany(Pustaka::class, 'budaya_id', 'budaya_id');
    }
}
