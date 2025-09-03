<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

    protected $primaryKey = 'comment_id';
    protected $fillable = ['isi', 'article_id', 'user_id'];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'artikel_id', 'artikel_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}