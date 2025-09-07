<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Mendapatkan pengguna yang sedang login
        $user = Auth::user();

        // Memuat riwayat komentar yang dibuat oleh pengguna
        $comments = $user->comments()->with('artikel.budayas')->latest()->get();

        return view('profile', compact('user', 'comments'));
    }
}