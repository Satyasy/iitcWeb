@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/explore.css') }}">

<main class="main-content">
    <section class="hero-section">
        <div class="hero-text-container">
            <h1 class="hero-title">Explore Budaya Nusantara</h1>
            <p class="hero-text">Budaya tak lagi hanya diceritakan, kini bisa kamu eksplorasi secara digital. Satu klik untuk ribuan tradisi, kuliner, dan seni Nusantara.</p>
        </div>
        <div class="hero-image-container">
            <img src="{{ asset('images/explore_asset/hero-image.png') }}" alt="Ilustrasi Budaya Nusantara" class="hero-image">
        </div>
    </section>

    <section class="category-section">
        <h2 class="section-title">Menjelajahi Keilmuan dan Kekayaan Warisan Indonesia</h2>
        <div class="category-grid">
            <a href="/budaya/ragam" class="category-card card-style-1">
                <img src="{{ asset('images/explore_asset/ragam-budaya.jpg') }}" alt="Ragam Budaya" class="card-image-1">
                <div class="card-content-1">
                    <h3 class="card-title-1">Ragam Budaya</h3>
                    <p class="card-description-1">Seni, tarian, dan keunikan suku-suku di Indonesia.</p>
                </div>
            </a>
            <a href="/explore/tradisi" class="category-card card-style-1">
                <img src="{{ asset('images/explore_asset/tradisi.jpg') }}" alt="Tradisi & Adat Istiadat" class="card-image-1">
                <div class="card-content-1">
                    <h3 class="card-title-1">Tradisi & Adat Istiadat</h3>
                    <p class="card-description-1">Jelajahi tradisi dan adat istiadat dari seluruh penjuru negeri.</p>
                </div>
            </a>
            <a href="/explore/bahasa" class="category-card card-style-1">
                <img src="{{ asset('images/explore_asset/bahasa.jpg') }}" alt="Bahasa & Aksara Kuno" class="card-image-1">
                <div class="card-content-1">
                    <h3 class="card-title-1">Bahasa & Aksara Kuno</h3>
                    <p class="card-description-1">Pelajari bahasa dan aksara kuno yang masih lestari.</p>
                </div>
            </a>
            <a href="/explore/tokoh" class="category-card card-style-2">
                <img src="{{ asset('images/explore_asset/tokoh.jpg') }}" alt="Tokoh Budaya" class="card-image-2">
                <div class="card-content-2">
                    <h3 class="card-title-2">Tokoh Budaya</h3>
                    <p class="card-description-2">Kenali sosok inspiratif di balik keberagaman budaya.</p>
                </div>
            </a>
            <a href="/explore/peninggalan" class="category-card card-style-2">
                <img src="{{ asset('images/explore_asset/candi.jpg') }}" alt="Peninggalan Sejarah" class="card-image-2">
                <div class="card-content-2">
                    <h3 class="card-title-2">Peninggalan Sejarah</h3>
                    <p class="card-description-2">Temukan keajaiban dari warisan sejarah dan purbakala.</p>
                </div>
            </a>
        </div>
    </section>

    <section class="culinary-section">
        <h2 class="section-title">Ragam Kuliner Nusantara</h2>
        <div class="culinary-grid">
            <a href="#" class="culinary-card">
                <img src="{{ asset('images/explore_asset/sate.jpg') }}" alt="Sate Madura" class="culinary-image">
                <div class="culinary-content">
                    <h3 class="culinary-title">Sate Madura</h3>
                    <p class="culinary-origin">Kuliner Khas Madura</p>
                </div>
            </a>
            <a href="#" class="culinary-card">
                <img src="{{ asset('images/explore_asset/rendang.jpg') }}" alt="Rendang" class="culinary-image">
                <div class="culinary-content">
                    <h3 class="culinary-title">Rendang</h3>
                    <p class="culinary-origin">Kuliner Khas Padang</p>
                </div>
            </a>
            <a href="#" class="culinary-card">
                <img src="{{ asset('images/explore_asset/gado-gado.jpg') }}" alt="Gado-Gado" class="culinary-image">
                <div class="culinary-content">
                    <h3 class="culinary-title">Gado-Gado</h3>
                    <p class="culinary-origin">Kuliner Khas Betawi</p>
                </div>
            </a>
        </div>
        <a href="/explore/kuliner" class="btn-primary">Jelajahi Kuliner Lainnya</a>
    </section>

    <section class="articles-section">
        <h2 class="section-title">Ragam Artikel Budaya Nusantara</h2>
        <div class="articles-grid">
            <a href="#" class="article-card article-main-card">
                <img src="{{ asset('images/explore_asset/artikel-utama.jpg') }}" alt="Gamelan: Harmoni yang Mendunia" class="article-image-main">
                <div class="article-content-main">
                    <h3 class="article-title-main">Gamelan: Harmoni yang Mendunia</h3>
                    <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="article-excerpt">Gamelan adalah alat musik tradisional yang berasal dari Jawa dan Bali, Indonesia, dengan sejarah...</p>
                </div>
            </a>
            <div class="article-list-container">
                <a href="#" class="article-card article-small-card">
                    <img src="{{ asset('images/explore_asset/artikel-kecil-1.jpg') }}" alt="Tari Saman" class="article-image-small">
                    <div class="article-content-small">
                        <h3 class="article-title-small">Tari Saman: Kekompakan Ribuan Tangan</h3>
                        <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    </div>
                </a>
                <a href="#" class="article-card article-small-card">
                    <img src="{{ asset('images/explore_asset/artikel-kecil-2.jpg') }}" alt="Wajah Manusia Jawa Kuno" class="article-image-small">
                    <div class="article-content-small">
                        <h3 class="article-title-small">Wajah Manusia Jawa Kuno di Indonesia</h3>
                        <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    </div>
                </a>
                <a href="#" class="article-card article-small-card">
                    <img src="{{ asset('images/explore_asset/artikel-kecil-3.jpg') }}" alt="Menjelajahi Sejarah Raja-Raja" class="article-image-small">
                    <div class="article-content-small">
                        <h3 class="article-title-small">Menjelajahi Sejarah Raja-Raja di Indonesia</h3>
                        <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    </div>
                </a>
                <a href="#" class="article-card article-small-card">
                    <img src="{{ asset('images/explore_asset/artikel-kecil-4.jpg') }}" alt="Festival Gandrung Sewu" class="article-image-small">
                    <div class="article-content-small">
                        <h3 class="article-title-small">Festival Gandrung Sewu</h3>
                        <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    </div>
                </a>
            </div>
        </div>
        <a href="/explore/artikel" class="btn-primary">Baca Artikel Lainnya</a>
    </section>

    <section class="pustaka-section">
        <h2 class="section-title">Pustaka Nusantara</h2>
        <div class="pustaka-grid">
            <a href="#" class="pustaka-card">
                <img src="{{ asset('images/explore_asset/timun-mas.jpg') }}" alt="Timun Mas" class="pustaka-image">
                <div class="pustaka-content">
                    <h3 class="pustaka-title">Timun Mas</h3>
                    <p class="pustaka-text">Cerita Rakyat</p>
                </div>
            </a>
            <a href="#" class="pustaka-card">
                <img src="{{ asset('images/explore_asset/aksara-jawa.jpg') }}" alt="Aksara Jawa" class="pustaka-image">
                <div class="pustaka-content">
                    <h3 class="pustaka-title">Aksara Jawa (Hanacaraka)</h3>
                    <p class="pustaka-text">Bahasa & Aksara Kuno</p>
                </div>
            </a>
            <a href="#" class="pustaka-card">
                <img src="{{ asset('images/explore_asset/danau-toba.jpg') }}" alt="Danau Toba" class="pustaka-image">
                <div class="pustaka-content">
                    <h3 class="pustaka-title">Danau Toba</h3>
                    <p class="pustaka-text">Cerita Rakyat</p>
                </div>
            </a>
        </div>
        <a href="/explore/pustaka" class="btn-primary">Jelajahi Pustaka</a>
    </section>

    <section class="event-section">
        <h2 class="section-title">Jelajahi Harmoni Event Budaya Nusantara</h2>
        <div class="event-images-grid">
            <a href="#" class="event-image-container">
                <img src="{{ asset('images/explore_asset/event-1.jpg') }}" alt="Festival Nusantara 2024" class="event-image">
            </a>
            <a href="#" class="event-image-container">
                <img src="{{ asset('images/explore_asset/event-2.jpg') }}" alt="Tari Tradisional" class="event-image">
            </a>
        </div>
        <a href="/explore/event" class="btn-primary">Jelajahi Event Budaya Nusantara</a>
    </section>
</main>
@endsection