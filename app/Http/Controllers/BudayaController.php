<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budaya; // Pastikan model Budaya sudah diimpor

class BudayaController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel 'budayas'
        $budayas = Budaya::all();

        // Kirim data 'budayas' ke view
        return view('budaya', compact('budayas'));
    }
}