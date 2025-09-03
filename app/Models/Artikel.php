<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $primaryKey = 'artikel_id';
    protected $fillable = ['judul', 'deskripsi', 'topic', 'image', 'user_id', 'budaya_id'];

    public function budaya()
    {
        return $this->hasMany(Budaya::class, 'budaya_id', 'budaya_id');
    }
    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }
}