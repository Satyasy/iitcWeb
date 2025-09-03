@extends('layouts.app')

@section('content')
<main class="main-content">
    <section class="hero-section">
        <div class="hero-text">
            <h1 class="hero-title">Melestarikan Budaya, Menyatukan Nusantara</h1>
            <p class="hero-description">
                Platform digital untuk melestarikan budaya dan menyatukan Nusantara. Mari bersama-sama
                menjelajahi keindahan Indonesia.
            </p>
            <a href="/explore" class="btn btn-primary">Jelajahi Sekarang</a>
        </div>
        <div class="hero-images">
            <img src="{{ asset('images/hero-images.png') }}" alt="Budaya Nusantara" class="hero-image">
        </div>
    </section>

    <section class="explore-section">
        <h2 class="section-title">Explore Budaya Nusantara</h2>
        <div class="explore-categories">
            <div class="category-item">
                <img src="{{ asset('images/explore-ragam.png') }}" alt="Ragam Budaya" class="category-icon">
                <span class="category-name">Ragam Budaya</span>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/explore-kuliner.png') }}" alt="Kuliner" class="category-icon">
                <span class="category-name">Kuliner</span>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/explore-event.png') }}" alt="Event" class="category-icon">
                <span class="category-name">Event</span>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/explore-artikel.png') }}" alt="Artikel" class="category-icon">
                <span class="category-name">Artikel</span>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/explore-pustaka.png') }}" alt="Pustaka" class="category-icon">
                <span class="category-name">Pustaka</span>
            </div>
        </div>
    </section>

    <section class="content-section">
        <h2 class="section-title">Mulai Melakukan Explore Budaya Nusantara</h2>
        <div class="content-cards-container">
            <div class="card">
                <div class="card-image-box">
                    <img src="{{ asset('images/card-ragam.png') }}" alt="Ragam Budaya" class="card-image">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Ragam Budaya</h3>
                    <p class="card-description">
                        Kenali macam-macam suku, tarian, adat istiadat, dan warisan budaya yang tersebar di seluruh Indonesia.
                    </p>
                    <a href="/budaya" class="btn btn-secondary">Jelajahi Sekarang</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image-box">
                    <img src="{{ asset('images/card-kuliner.png') }}" alt="Kuliner" class="card-image">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Kuliner</h3>
                    <p class="card-description">
                        Cicipi dan jelajahi berbagai macam kuliner lezat yang penuh dengan sejarah dan keunikan di Indonesia.
                    </p>
                    <a href="/kuliner" class="btn btn-secondary">Jelajahi Sekarang</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image-box">
                    <img src="{{ asset('images/card-event.png') }}" alt="Event" class="card-image">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Event</h3>
                    <p class="card-description">
                        Informasi lengkap tentang event seni dan budaya yang sedang berlangsung atau akan datang di daerahmu.
                    </p>
                    <a href="/event" class="btn btn-secondary">Jelajahi Sekarang</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image-box">
                    <img src="{{ asset('images/card-artikel.png') }}" alt="Artikel" class="card-image">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Artikel</h3>
                    <p class="card-description">
                        Baca artikel menarik seputar sejarah, tradisi, dan cerita unik dari berbagai daerah di Indonesia.
                    </p>
                    <a href="/artikel" class="btn btn-secondary">Jelajahi Sekarang</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image-box">
                    <img src="{{ asset('images/card-pustaka.png') }}" alt="Pustaka" class="card-image">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Pustaka</h3>
                    <p class="card-description">
                        Kumpulan buku, jurnal, dan karya tulis lain yang mendalam tentang kekayaan budaya dan sejarah.
                    </p>
                    <a href="/pustaka" class="btn btn-secondary">Jelajahi Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section">
        <h2 class="section-title">About Us</h2>
        <div class="about-content">
            <img src="{{ asset('images/logo_green_large.png') }}" alt="Nusaya Logo" class="about-logo">
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