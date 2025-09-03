<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pustaka extends Model
{
    protected $primaryKey = 'pustaka_id';
    protected $fillable = ['judul', 'tahun_terbit', 'sinopsis', 'author', 'tema', 'budaya_id'];

    public function budaya()
    {
        return $this->hasMany(Budaya::class, 'budaya_id', 'budaya_id');
    }
}