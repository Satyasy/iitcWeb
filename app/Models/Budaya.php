<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'budaya_id', 'budaya_id');
    }
    public function pustaka()
    {
        return $this->hasMany(Pustaka::class, 'budaya_id', 'budaya_id');
    }
}