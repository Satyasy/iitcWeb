<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';
    protected $primaryKey = 'artikel_id';

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'budaya_id',
    ];

    public function user() // Diubah dari users() menjadi singular user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function budaya() // Diubah dari budayas() menjadi singular budaya()
    {
        return $this->belongsTo(Budaya::class, 'budaya_id', 'budaya_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'artikel_id', 'artikel_id');
    }
}