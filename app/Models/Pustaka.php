<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pustaka extends Model
{
    public function budaya()
    {
        return $this->hasMany(Budaya::class, 'budaya_id', 'budaya_id');
    }
}