@extends('layouts.app')

@section('title', 'Budaya')

{{-- Menghubungkan file CSS khusus untuk halaman ini --}}
@push('head')
    <link rel="stylesheet" href="{{ asset('css/budaya.css') }}">
@endpush

@section('content')
    <main class="main-content">
        <section class="budaya-hero-section">
            <div class="budaya-hero-text">
                <h1 class="budaya-hero-title">Ragam Budaya Nusantara</h1>
                <p class="budaya-hero-description">
                    Jelajahi kekayaan budaya Indonesia, dari tarian, musik, rumah adat, kesenian, hingga warisan batik & tenun.
                </p>
                <a href="#" class="budaya-btn-interactive">Jelajahi Sekarang</a>
            </div>
            <div class="budaya-hero-images">
                <div class="budaya-image-grid">
                    <img src="{{ asset('images/welcome_asset/budayahero1.png') }}" alt="Gambar Budaya 1" class="budaya-grid-image">
                    <img src="{{ asset('images/welcome_asset/budayahero2.png') }}" alt="Gambar Budaya 2" class="budaya-grid-image">
                    <img src="{{ asset('images/welcome_asset/budayahero3.png') }}" alt="Gambar Budaya 3" class="budaya-grid-image">
                    <img src="{{ asset('images/welcome_asset/budayahero4.png') }}" alt="Gambar Budaya 4" class="budaya-grid-image">
                </div>
            </div>
        </section>

        <section class="budaya-content-section">
            <h3 class="budaya-section-title">Ragam Budaya <span>Nusantara</span>
                <div class="budaya-title-underline"></div>
            </h3>
            <div class="budaya-card-grid">
                <div class="budaya-card">
                    <img src="{{ asset('images/budaya_asset/taritradisional.png') }}" alt="Tari Tradisional" class="budaya-card-image">
                    <div class="budaya-card-content">
                        <h4 class="budaya-card-title">Tari Tradisional</h4>
                        <p class="budaya-card-subtitle">Kesenian</p>
                    </div>
                </div>
                
                <div class="budaya-card">
                    <img src="{{ asset('images/budaya_asset/alatmusiktradisional.avif') }}" alt="Alat Musik Tradisional" class="budaya-card-image">
                    <div class="budaya-card-content">
                        <h4 class="budaya-card-title">Alat Musik Tradisional</h4>
                        <p class="budaya-card-subtitle">Kesenian</p>
                    </div>
                </div>

                <div class="budaya-card">
                    <img src="{{ asset('images/budaya_asset/pakaianadat.png') }}" alt="Pakaian Adat Daerah" class="budaya-card-image">
                    <div class="budaya-card-content">
                        <h4 class="budaya-card-title">Pakaian Adat Daerah</h4>
                        <p class="budaya-card-subtitle">Pakaian</p>
                    </div>
                </div>

                <div class="budaya-card">
                    <img src="{{ asset('images/budaya_asset/rumahadat.jpg') }}" alt="Rumah Adat Daerah" class="budaya-card-image">
                    <div class="budaya-card-content">
                        <h4 class="budaya-card-title">Rumah Adat Daerah</h4>
                        <p class="budaya-card-subtitle">Arsitektur</p>
                    </div>
                </div>

                <div class="budaya-card">
                    <img src="{{ asset('images/budaya_asset/warisanbudaya.jpg') }}" alt="Warisan Budaya Wayang" class="budaya-card-image">
                    <div class="budaya-card-content">
                        <h4 class="budaya-card-title">Warisan Budaya Wayang</h4>
                        <p class="budaya-card-subtitle">Kesenian</p>
                    </div>
                </div>
                
                <div class="budaya-card">
                    <img src="{{ asset('images/budaya_asset/batiktenun.jpg') }}" alt="Warisan Batik & Tenun" class="budaya-card-image">
                    <div class="budaya-card-content">
                        <h4 class="budaya-card-title">Warisan Batik & Tenun</h4>
                        <p class="budaya-card-subtitle">Pakaian</p>
                   </div>
                </div>
            </div>
        </section>

        <section class="budaya-explore-section">
            <h3 class="budaya-section-title">Jelajahi lainnya
                <div class="budaya-title-underline"></div>
            </h3>
            <div class="budaya-button-container">
                <a href="/ragam" class="budaya-btn-secondary">Ragam Budaya Nusantara</a>
                <a href="/ragam" class="budaya-btn-secondary">Bahasa & Aksara Daerah</a>
                <a href="/ragam" class="budaya-btn-secondary">Tradisi & Upacara Adat</a>
                <a href="/ragam" class="budaya-btn-secondary">Makanan Khas Nusantara</a>
                <a href="/ragam" class="budaya-btn-secondary">Jajanan Tradisional</a>
                <a href="/ragam" class="budaya-btn-secondary">Minuman</a>
                <a href="/ragam" class="budaya-btn-secondary">Artikel</a>
                <a href="/ragam" class="budaya-btn-secondary">Pustaka</a>
                <a href="/ragam" class="budaya-btn-secondary">Event Kebudayaan</a>
            </div>
        </section>
    </main>
@endsection
