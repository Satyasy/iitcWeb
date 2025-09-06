@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/explore.css') }}">

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-text-container">
            <h1 class="hero-title">Explore Budaya Nusantara</h1>
            <p class="hero-text">Budaya tak lagi hanya diceritakan, kini bisa kamu eksplorasi secara digital. Satu klik untuk ribuan tradisi, kuliner, dan seni Nusantara.</p>
        </div>
        <div class="hero-image-container">
            <img src="{{ asset('images/explore_asset/hero-image.png') }}" alt="Ilustrasi Budaya Nusantara" class="hero-image">
        </div>
    </section>

    <!-- Kategori Section -->
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

    <!-- Culinary Section -->
    <section class="culinary-section">
        <h2 class="section-title">Ragam Kuliner Nusantara</h2>
        <div class="culinary-list">
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
            <a href="#" class="culinary-card">
                <img src="{{ asset('images/explore_asset/soto.jpg') }}" alt="Soto" class="culinary-image">
                <div class="culinary-content">
                    <h3 class="culinary-title">Soto</h3>
                    <p class="culinary-origin">Kuliner Khas Nusantara</p>
                </div>
            </a>
        </div>
        <a href="/explore/kuliner" class="btn-primary">Jelajahi Kuliner Lainnya</a>
    </section>

    <!-- Articles Section -->
    <section class="articles-section">
        <h2 class="section-title">Ragam Artikel Budaya Nusantara</h2>
        <div class="articles-list">
            <a href="#" class="article-card">
                <img src="{{ asset('images/explore_asset/artikel-utama.jpg') }}" alt="Gamelan: Harmoni yang Mendunia" class="article-image">
                <div class="article-content">
                    <h3 class="article-title">Gamelan: Harmoni yang Mendunia</h3>
                    <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="article-excerpt">Gamelan adalah alat musik tradisional yang berasal dari Jawa dan Bali, Indonesia...</p>
                </div>
            </a>
            <a href="#" class="article-card">
                <img src="{{ asset('images/explore_asset/artikel-kecil-1.jpg') }}" alt="Tari Saman" class="article-image">
                <div class="article-content">
                    <h3 class="article-title">Tari Saman: Kekompakan Ribuan Tangan</h3>
                    <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="article-excerpt">Tari Saman adalah salah satu tarian tradisional dari Aceh...</p>
                </div>
            </a>
            <a href="#" class="article-card">
                <img src="{{ asset('images/explore_asset/artikel-kecil-2.jpg') }}" alt="Wajah Manusia Jawa Kuno" class="article-image">
                <div class="article-content">
                    <h3 class="article-title">Wajah Manusia Jawa Kuno di Indonesia</h3>
                    <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="article-excerpt">Penemuan fosil manusia purba di Jawa memberikan wawasan unik tentang sejarah...</p>
                </div>
            </a>
            <a href="#" class="article-card">
                <img src="{{ asset('images/explore_asset/artikel-kecil-3.jpg') }}" alt="Menjelajahi Sejarah Raja-Raja" class="article-image">
                <div class="article-content">
                    <h3 class="article-title">Menjelajahi Sejarah Raja-Raja di Indonesia</h3>
                    <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="article-excerpt">Kisah para raja dan kerajaan di Indonesia membentuk...</p>
                </div>
            </a>
            <a href="#" class="article-card">
                <img src="{{ asset('images/explore_asset/artikel-kecil-4.jpg') }}" alt="Festival Gandrung Sewu" class="article-image">
                <div class="article-content">
                    <h3 class="article-title">Festival Gandrung Sewu</h3>
                    <p class="article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="article-excerpt">Festival Gandrung Sewu adalah perayaan budaya yang megah di Banyuwangi...</p>
                </div>
            </a>
        </div>
        <a href="/explore/artikel" class="btn-primary">Baca Artikel Lainnya</a>
    </section>

    <!-- Pustaka Section -->
    <section class="pustaka-section">
        <h2 class="section-title">Pustaka Nusantara</h2>
        <div class="pustaka-list">
            <a href="#" class="pustaka-card">
                <img src="{{ asset('images/explore_asset/timun-mas.jpg') }}" alt="Timun Mas" class="pustaka-image">
                <div class="pustaka-content">
                    <h3 class="pustaka-title">Timun Mas</h3>
                    <p class="pustaka-origin">Cerita Rakyat</p>
                </div>
            </a>
            <a href="#" class="pustaka-card">
                <img src="{{ asset('images/explore_asset/aksara-jawa.jpg') }}" alt="Aksara Jawa" class="pustaka-image">
                <div class="pustaka-content">
                    <h3 class="pustaka-title">Aksara Jawa (Hanacaraka)</h3>
                    <p class="pustaka-origin">Bahasa & Aksara Kuno</p>
                </div>
            </a>
            <a href="#" class="pustaka-card">
                <img src="{{ asset('images/explore_asset/danau-toba.jpg') }}" alt="Danau Toba" class="pustaka-image">
                <div class="pustaka-content">
                    <h3 class="pustaka-title">Danau Toba</h3>
                    <p class="pustaka-origin">Cerita Rakyat</p>
                </div>
            </a>
        </div>
        <a href="/explore/pustaka" class="btn-primary">Jelajahi Pustaka</a>
    </section>

    <!-- Event Section -->
    <section class="event-section">
        <h2 class="section-title">Jelajahi Harmoni Event Budaya Nusantara</h2>
        <div class="event-list">
            <a href="#" class="event-card">
                <img src="{{ asset('images/explore_asset/event-1.jpg') }}" alt="Festival Nusantara 2024" class="event-image">
                <div class="event-content">
                    <h3 class="event-title">Festival Nusantara 2024</h3>
                    <p class="event-meta">Event Budaya</p>
                </div>
            </a>
            <a href="#" class="event-card">
                <img src="{{ asset('images/explore_asset/event-2.jpg') }}" alt="Tari Tradisional" class="event-image">
                <div class="event-content">
                    <h3 class="event-title">Tari Tradisional</h3>
                    <p class="event-meta">Event Budaya</p>
                </div>
            </a>
        </div>
        <a href="/explore/event" class="btn-primary">Jelajahi Event Budaya Nusantara</a>
    </section>
</main>
@endsection