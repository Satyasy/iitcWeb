<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $primaryKey = 'lokasi_id';
    protected $fillable = ['nama_lokasi', 'alamat', 'provinsi'];

    //
}