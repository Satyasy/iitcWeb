<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;


class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'foto',
        'role',
    ];

    public function artikels()
    {
        return $this->hasMany(Artikel::class, 'user_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'user_id');
    }

    // Relasi baru, User mengunggah banyak Budaya
    public function budayas()
    {
        return $this->hasMany(Budaya::class, 'user_id', 'user_id');
    }

    // Metode yang hilang, pastikan untuk menempatkan metode ini di dalam class
    public function canAccessFilament(): bool
    {
        // Logika otorisasi untuk mengakses panel admin
        // Hanya izinkan peran 'admin' dan 'kurator'
        return $this->role === 'admin';
    }

    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return $this->canAccessFilament();
    }
}