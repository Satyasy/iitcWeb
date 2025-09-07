@extends('layouts.app')

@section('title', 'Budaya')

{{-- Menghubungkan file CSS khusus untuk halaman ini --}}
@push('head')
<link rel="stylesheet" href="{{ asset('css/budaya.css') }}">
@endpush

@section('content')
    <main class="main-content">
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

        <section class="my-12 max-w-6xl mx-auto px-4 py-8">
            <h3 class="section-title">Ragam Budaya <span>Nusantara</span>
                <div class="title-underline"></div>
            </h3>
            <div class="card-grid">
                <div class="card">
                    <img src="{{ asset('images/budaya_asset/taritradisional.png') }}" alt="Tari Tradisional" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">Tari Tradisional</h4>
                        <p class="card-subtitle">Kesenian</p>
                    </div>
                </div>
                
                <div class="card">
                    <img src="{{ asset('images/budaya_asset/alatmusiktradisional.avif') }}" alt="Alat Musik Tradisional" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">Alat Musik Tradisional</h4>
                        <p class="card-subtitle">Kesenian</p>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/budaya_asset/pakaianadat.png') }}" alt="Pakaian Adat Daerah" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">Pakaian Adat Daerah</h4>
                        <p class="card-subtitle">Pakaian</p>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/budaya_asset/rumahadat.jpg') }}" alt="Rumah Adat Daerah" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">Rumah Adat Daerah</h4>
                        <p class="card-subtitle">Arsitektur</p>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/budaya_asset/warisanbudaya.jpg') }}" alt="Warisan Budaya Wayang" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">Warisan Budaya Wayang</h4>
                        <p class="card-subtitle">Kesenian</p>
                    </div>
                </div>
                
                <div class="card">
                    <img src="{{ asset('images/budaya_asset/batiktenun.jpg') }}" alt="Warisan Batik & Tenun" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">Warisan Batik & Tenun</h4>
                        <p class="card-subtitle">Pakaian</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-12 text-center max-w-6xl mx-auto px-4 py-8">
            <h3 class="section-title">Jelajahi lainnya
                <div class="title-underline"></div>
            </h3>
            <div class="button-container">
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