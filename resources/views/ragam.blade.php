@extends('layouts.app')

@section('title', 'Ragam Nusantara')

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
                <a href="#ragam-budaya" class="btn-interactive">Jelajahi Sekarang</a>
            </div>
            <div class="hero-image-gallery">
                <img src="{{ asset('images/ragam_asset/wayang.webp') }}" alt="Wayang Kulit" class="gallery-image large">
                <img src="{{ asset('images/ragam_asset/batik.jpg') }}" alt="Motif Batik" class="gallery-image small">
                <img src="{{ asset('images/ragam_asset/bali.jpg') }}" alt="Tari Bali" class="gallery-image small">
                <img src="{{ asset('images/ragam_asset/rumah_adat.jpg') }}" alt="Rumah Adat" class="gallery-image small">
            </div>
        </section>

        ---

        <section id="ragam-budaya" class="py-12 px-4 md:px-8">
            <h3 class="section-title">
                Ragam Budaya <span>Nusantara</span>
                <div class="title-underline"></div>
            </h3>
            <div class="card-grid">
                <!-- Contoh Kartu Budaya (Statik) -->
                <a href="/detail" class="card">
                    <img src="{{ asset('images/explore_asset/tari.png') }}" alt="Tari Tradisional" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Tarian</span>
                        <h4 class="card-title">Tari Puspajali</h4>
                        <p class="card-location">Di Bali</p>
                    </div>
                </a>
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/candi_prambanan.avif') }}" alt="Candi Prambanan"
                        class="card-image">
                    <div class="card-content">
                        <span class="card-category">Peninggalan Budaya</span>
                        <h4 class="card-title">Candi Prambanan</h4>
                        <p class="card-location">DI Yogyakarta</p>
                    </div>
                </a>
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/batik.jpg') }}" alt="Batik Megamendung" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Kain Tradisional</span>
                        <h4 class="card-title">Batik Megamendung</h4>
                        <p class="card-location">Di Cirebon</p>
                    </div>
                </a>
            </div>
        </section>

        ---

        <section class="py-12 px-4 md:px-8">
            <h3 class="section-title">
                Ragam Kuliner <span>Nusantara</span>
                <div class="title-underline"></div>
            </h3>
            <div class="card-grid">
                <!-- Contoh Kartu Kuliner (Statik) -->
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/rendang.jpg') }}" alt="Rendang" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Makanan Khas Padang</span>
                        <h4 class="card-title">Rendang</h4>
                        <p class="card-location">Sumatera Barat</p>
                    </div>
                </a>
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/sate_madura.jpg') }}" alt="Sate Madura" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Makanan Khas Madura</span>
                        <h4 class="card-title">Sate Madura</h4>
                        <p class="card-location">Jawa Timur</p>
                    </div>
                </a>
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/soto.webp') }}" alt="Soto" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Makanan Khas Nusantara</span>
                        <h4 class="card-title">Soto</h4>
                        <p class="card-location">Berbagai Daerah</p>
                    </div>
                </a>
            </div>
        </section>

        ---

        <section class="py-12 px-4 md:px-8">
            <h3 class="section-title">
                Ragam Artikel <span>Nusantara</span>
                <div class="title-underline"></div>
            </h3>
            <div class="card-grid">
                <!-- Contoh Kartu Artikel (Statik) -->
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/pakaian_adat.png') }}" alt="Pakaian Adat" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Artikel</span>
                        <h4 class="card-title">Pakaian Adat Daerah</h4>
                        <p class="card-location">Beragam Budaya</p>
                    </div>
                </a>
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/reog.jpg') }}" alt="Reog Ponorogo" class="card-image">
                    <div class="card-content">
                        <span class="card-category">Artikel</span>
                        <h4 class="card-title">Reog Ponorogo</h4>
                        <p class="card-location">Jawa Timur</p>
                    </div>
                </a>
                <a href="/detail" class="card">
                    <img src="{{ asset('images/ragam_asset/gunungan_wayang.jpg') }}" alt="Gunungan Wayang"
                        class="card-image">
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
