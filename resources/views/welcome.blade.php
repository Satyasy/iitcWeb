@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endpush

@section('content')
    <main class="main-content">
        <section class="hero-section">
            <div class="hero-text">
                <h1 class="hero-title">Melestarikan Budaya, Menyatukan Nusantara</h1>
                <p class="hero-description">
                    Platform digital untuk melestarikan budaya dan menyatukan Nusantara. Mari bersama-sama
                    menjelajahi keindahan Indonesia.
                </p>
                <a href="/explore" class="btn-interactive">Jelajahi Sekarang</a>
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

        <section class="explore-section">
            <h2 class="section-title">
                Explore Budaya Nusantara
                <span class="title-underline"></span>
            </h2>
            <p class="explore-description">
                Budaya tak lagi hanya diceritakan, kini bisa kamu eksplorasi secara digital.
                Satu klik untuk ribuan tradisi, kuliner, dan seni Nusantara.
            </p>
            <div class="explore-categories">
                <a href="/budaya/ragam" class="category-item">
                    <img src="{{ asset('images/welcome_asset/exploresec1.png') }}" alt="Ragam Budaya" class="category-icon">
                    <span class="category-name">Ragam Budaya</span>
                </a>
                <a href="/budaya/kuliner" class="category-item">
                    <img src="{{ asset('images/welcome_asset/exploresec2.png') }}" alt="Kuliner" class="category-icon">
                    <span class="category-name">Kuliner</span>
                </a>
                <a href="/budaya/event" class="category-item">
                    <img src="{{ asset('images/welcome_asset/exploresec3.png') }}" alt="Event" class="category-icon">
                    <span class="category-name">Event</span>
                </a>
                <a href="/explore/artikel" class="category-item">
                    <img src="{{ asset('images/welcome_asset/exploresec4.png') }}" alt="Artikel" class="category-icon">
                    <span class="category-name">Artikel</span>
                </a>
                <a href="/budaya/pustaka" class="category-item">
                    <img src="{{ asset('images/welcome_asset/exploresec5.png') }}" alt="Pustaka" class="category-icon">
                    <span class="category-name">Pustaka</span>
                </a>
            </div>
        </section>

        <section class="content-section">
            <h2 class="section-title">
                Mulai Jelajahi Budaya Nusantara
                <span class="title-underline"></span>
            </h2>
            <div class="content-cards-container">
                <div class="card">
                    <div class="card-image-box">
                        <img src="{{ asset('images/welcome_asset/jelajahsec1.png') }}" alt="Ragam Budaya"
                            class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Ragam Budaya</h3>
                        <p class="card-description">
                            Kenali macam-macam suku, tarian, adat istiadat, dan warisan budaya yang tersebar di seluruh
                            Indonesia.
                        </p>
                        <a href="/explore" class="btn-secondary">Jelajahi Sekarang</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-box">
                        <img src="{{ asset('images/welcome_asset/jelajahsec2.png') }}" alt="Kuliner" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Kuliner</h3>
                        <p class="card-description">
                            Cicipi dan jelajahi berbagai macam kuliner lezat yang penuh dengan sejarah dan keunikan di
                            Indonesia.
                        </p>
                        <a href="/explore" class="btn-secondary">Jelajahi Sekarang</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-box">
                        <img src="{{ asset('images/welcome_asset/jelajahsec3.png') }}" alt="Event" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Event</h3>
                        <p class="card-description">
                            Informasi lengkap tentang event seni dan budaya yang sedang berlangsung atau akan datang di
                            daerahmu.
                        </p>
                        <a href="/explore" class="btn-secondary">Jelajahi Sekarang</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-box">
                        <img src="{{ asset('images/welcome_asset/jelajahsec4.png') }}" alt="Artikel" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Artikel</h3>
                        <p class="card-description">
                            Baca artikel menarik seputar sejarah, tradisi, dan cerita unik dari berbagai daerah di
                            Indonesia.
                        </p>
                        <a href="/explore" class="btn-secondary">Jelajahi Sekarang</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-box">
                        <img src="{{ asset('images/welcome_asset/jelajahsec5.png') }}" alt="Pustaka"
                            class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Pustaka</h3>
                        <p class="card-description">
                            Kumpulan buku, jurnal, dan karya tulis lain yang mendalam tentang kekayaan budaya dan sejarah.
                        </p>
                        <a href="explore" class="btn-secondary">Jelajahi Sekarang</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-us-section">
            <h2 class="section-title">
                About Us
                <span class="title-underline"></span>
            </h2>
            <div class="about-content">
                <img src="{{ asset('images/logo1.png') }}" alt="Nusaya Logo" class="about-logo">
                <p class="about-description">
                    Nusaya adalah platform digital yang didedikasikan untuk melestarikan dan memperkenalkan kekayaan budaya
                    Indonesia kepada dunia. Kami percaya bahwa setiap tradisi, tarian, dan kisah memiliki nilai yang tak
                    ternilai. Melalui platform ini, kami mengajak setiap individu untuk terlibat aktif dalam menjaga dan
                    mewariskan warisan budaya.
                </p>
            </div>
        </section>
    </main>
@endsection
