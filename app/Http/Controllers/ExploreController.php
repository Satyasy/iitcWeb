<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;
use App\Models\Artikel;
use App\Models\Pustaka;
use App\Models\Event;

class ExploreController extends Controller
{
   public function index()
   {
      // Ambil data dari database
      $makanans = Makanan::with('lokasis')->latest()->limit(4)->get();
      $artikels = Artikel::with('users')->latest()->limit(5)->get();
      $pustakas = Pustaka::latest()->limit(3)->get();
      $events = Event::latest()->limit(2)->get();

      // Kirim semua data ke view
      return view('explore', compact('makanans', 'artikels', 'pustakas', 'events'));
   }
}