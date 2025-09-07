@extends('layouts.app')

@section('content')
    <main class="main-content">
        <!-- Section: Hero -->
        <section class="hero-section">
            <div class="hero-text">
                <h1 class="hero-title">Ragam Budaya Nusantara</h1>
                <p class="hero-description">
                    Jelajahi kekayaan budaya Indonesia, dari tarian, musik, rumah adat, kesenian, hingga warisan batik & tenun.
                </p>
                <a href="#" class="btn-interactive">Jelajahi Sekarang</a>
            </div>
            <div class="hero-images">
                <div class="image-grid">
                    <img src="{{ asset('images/welcome_asset/budayahero1.png') }}" alt="Gambar Budaya 1" class="grid-image">
                    <img src="{{ asset('images/welcome_asset/budayahero2.png') }}" alt="Gambar Budaya 2" class="grid-image">
                    <img src="{{ asset('images/welcome_asset/budayahero3.png') }}" alt="Gambar Budaya 3" class="grid-image">
                    <img src="{{ asset('images/welcome_asset/budayahero4.png') }}" alt="Gambar Budaya 4" class="grid-image">
                </div>
            </div>
        </section>

        <!-- Section: Ragam Budaya Nusantara Cards -->
        <section class="my-12 max-w-6xl mx-auto px-4 py-8">
            <h3 class="text-2xl md:text-3xl font-bold text-center text-[#1A1A1A] mb-8">Ragam Budaya <span class="text-[#4CB073]">Nusantara</span></h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Contoh Kartu Budaya -->
                <div class="card bg-white rounded-xl shadow-lg overflow-hidden relative group">
                    <img src="{{ asset('storage/images/tarian-tradisional.jpg') }}" alt="Tari Tradisional" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-1">Tari Tradisional</h4>
                        <p class="text-sm text-gray-500">Kesenian</p>
                    </div>
                </div>
                
                <div class="card bg-white rounded-xl shadow-lg overflow-hidden relative group">
                    <img src="{{ asset('storage/images/alat-musik.jpg') }}" alt="Alat Musik Tradisional" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-1">Alat Musik Tradisional</h4>
                        <p class="text-sm text-gray-500">Kesenian</p>
                    </div>
                </div>

                <div class="card bg-white rounded-xl shadow-lg overflow-hidden relative group">
                    <img src="{{ asset('storage/images/pakaian-adat.jpg') }}" alt="Pakaian Adat Daerah" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-1">Pakaian Adat Daerah</h4>
                        <p class="text-sm text-gray-500">Pakaian</p>
                    </div>
                </div>

                <div class="card bg-white rounded-xl shadow-lg overflow-hidden relative group">
                    <img src="{{ asset('storage/images/rumah-adat.jpg') }}" alt="Rumah Adat Daerah" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-1">Rumah Adat Daerah</h4>
                        <p class="text-sm text-gray-500">Arsitektur</p>
                    </div>
                </div>

                <div class="card bg-white rounded-xl shadow-lg overflow-hidden relative group">
                    <img src="{{ asset('storage/images/warisan-budaya.jpg') }}" alt="Warisan Budaya Wayang" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-1">Warisan Budaya Wayang</h4>
                        <p class="text-sm text-gray-500">Kesenian</p>
                    </div>
                </div>
                
                <div class="card bg-white rounded-xl shadow-lg overflow-hidden relative group">
                    <img src="{{ asset('storage/images/batik-tenun.jpg') }}" alt="Warisan Batik & Tenun" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="p-4">
                        <h4 class="font-bold text-lg mb-1">Warisan Batik & Tenun</h4>
                        <p class="text-sm text-gray-500">Pakaian</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Jelajahi Lainnya -->
        <section class="my-12 text-center max-w-6xl mx-auto px-4 py-8">
            <h3 class="text-2xl md:text-3xl font-bold text-[#1A1A1A] mb-8">Jelajahi lainnya</h3>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="btn-secondary">Ragam Budaya Nusantara</a>
                <a href="#" class="btn-secondary">Bahasa & Aksara Daerah</a>
                <a href="#" class="btn-secondary">Tradisi & Upacara Adat</a>
                <a href="#" class="btn-secondary">Makanan Khas Nusantara</a>
                <a href="#" class="btn-secondary">Jajanan Tradisional</a>
                <a href="#" class="btn-secondary">Minuman</a>
                <a href="#" class="btn-secondary">Artikel</a>
                <a href="#" class="btn-secondary">Pustaka</a>
                <a href="#" class="btn-secondary">Event Kebudayaan</a>
            </div>
        </section>
    </main>
@endsection