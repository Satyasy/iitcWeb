@extends('layouts.app')

@section('title', 'Ragam Nusantara')

{{-- Menghubungkan file CSS khusus untuk halaman ini --}}
@push('head')
<link rel="stylesheet" href="{{ asset('css/ragam.css') }}">
@endpush

@section('content')
    <main class="main-content">
        <section class="hero-section">
            <div class="hero-text">
                <h1 class="hero-title">
                    Jelajahi <br> Kekayaan <br> Warisan <br> Indonesia
                </h1>
                <p class="hero-description">
                    Eksplor keindahan kebudayaan kita yang memberi warna pada kebinekaan
                </p>
                <div class="hero-image-grid">
                    <img src="{{ asset('images/ragam_asset/wayang.jpg') }}" alt="Wayang Kulit" class="hero-image">
                    <img src="{{ asset('images/ragam_asset/batik.jpg') }}" alt="Motif Batik" class="hero-image">
                    <img src="{{ asset('images/ragam_asset/bali.jpg') }}" alt="Tari Bali" class="hero-image">
                    <img src="{{ asset('images/ragam_asset/rumah_adat.jpg') }}" alt="Rumah Adat" class="hero-image">
                </div>
            </div>
            <div class="hero-main-image">
                <img src="{{ asset('images/ragam_asset/hero_utama.jpg') }}" alt="Main Hero" class="hero-main-image-inner">
            </div>
        </section>

        <section class="py-12 px-4 md:px-8">
            <h3 class="section-title">
                Ragam Budaya <span>Nusantara</span>
                <div class="title-underline"></div>
            </h3>
            <div class="card-grid">
                <!-- Contoh Kartu Budaya (Statik) -->
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/tari_tradisional.jpg') }}" alt="Tari Tradisional" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Tarian</span>
                        <h4 class="card-title">Tari Puspajali</h4>
                        <p class="card-location">Di Bali</p>
                    </div>
                </a>
                <a href="/explore/detail/2" class="card">
                    <img src="{{ asset('images/ragam_asset/candi.jpg') }}" alt="Candi Prambanan" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Peninggalan Budaya</span>
                        <h4 class="card-title">Candi Prambanan</h4>
                        <p class="card-location">DI Yogyakarta</p>
                    </div>
                </a>
                <a href="/explore/detail/3" class="card">
                    <img src="{{ asset('images/ragam_asset/batik_megamendung.jpg') }}" alt="Batik Megamendung" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Kain Tradisional</span>
                        <h4 class="card-title">Batik Megamendung</h4>
                        <p class="card-location">Di Cirebon</p>
                    </div>
                </a>
            </div>
        </section>

        <section class="py-12 px-4 md:px-8">
            <h3 class="section-title">
                Ragam Kuliner <span>Nusantara</span>
                <div class="title-underline"></div>
            </h3>
            <div class="card-grid">
                <!-- Contoh Kartu Kuliner (Statik) -->
                <a href="/explore/detail/4" class="card">
                    <img src="{{ asset('images/ragam_asset/rendang.jpg') }}" alt="Rendang" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Makanan Khas Padang</span>
                        <h4 class="card-title">Rendang</h4>
                        <p class="card-location">Sumatera Barat</p>
                    </div>
                </a>
                <a href="/explore/detail/5" class="card">
                    <img src="{{ asset('images/ragam_asset/sate.jpg') }}" alt="Sate Madura" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Makanan Khas Madura</span>
                        <h4 class="card-title">Sate Madura</h4>
                        <p class="card-location">Jawa Timur</p>
                    </div>
                </a>
                <a href="/explore/detail/6" class="card">
                    <img src="{{ asset('images/ragam_asset/soto.jpg') }}" alt="Soto" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Makanan Khas Nusantara</span>
                        <h4 class="card-title">Soto</h4>
                        <p class="card-location">Berbagai Daerah</p>
                    </div>
                </a>
            </div>
        </section>

        <section class="py-12 px-4 md:px-8">
            <h3 class="section-title">
                Ragam Artikel <span>Nusantara</span>
                <div class="title-underline"></div>
            </h3>
            <div class="card-grid">
                <!-- Contoh Kartu Artikel (Statik) -->
                <a href="/explore/detail/7" class="card">
                    <img src="{{ asset('images/ragam_asset/pakaian_adat.jpg') }}" alt="Pakaian Adat" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Artikel</span>
                        <h4 class="card-title">Pakaian Adat Daerah</h4>
                        <p class="card-location">Beragam Budaya</p>
                    </div>
                </a>
                <a href="/explore/detail/8" class="card">
                    <img src="{{ asset('images/ragam_asset/reog.jpg') }}" alt="Reog Ponorogo" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Artikel</span>
                        <h4 class="card-title">Reog Ponorogo</h4>
                        <p class="card-location">Jawa Timur</p>
                    </div>
                </a>
                <a href="/explore/detail/9" class="card">
                    <img src="{{ asset('images/ragam_asset/gunungan.jpg') }}" alt="Gunungan Wayang" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Artikel</span>
                        <h4 class="card-title">Mengenal Gunungan Wayang</h4>
                        <p class="card-location">Yogyakarta</p>
                    </div>
                </a>
            </div>
        </section>

    </main>
@endsection
