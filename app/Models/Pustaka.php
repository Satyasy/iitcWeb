<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pustaka extends Model
{
    use HasFactory;

    protected $table = 'pustakas';
    protected $primaryKey = 'pustaka_id';

    protected $fillable = [
        'judul',
        'penulis',
        'tahun',
        'budaya_id',
        'tema',
        'sinopsis',
        'cover',
        'author',
        'file',
        'tahun_terbit',
    ];

    public function budaya() // Diubah dari budayas() menjadi singular budaya()
    {
        return $this->belongsTo(Budaya::class, 'budaya_id', 'budaya_id');
    }
}