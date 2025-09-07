@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">

    <main class="main-content">
        <section class="hero-section">
            <div class="hero-text-container">
                <h1 class="hero-title">Explore Budaya Nusantara</h1>
                <p class="hero-text">Budaya tak lagi hanya diceritakan, kini bisa kamu eksplorasi secara digital.
                    Satu klik untuk ribuan tradisi, kuliner, dan seni Nusantara.</p>
            </div>
            <div class="hero-image-container">
                <img src="{{ asset('images/explore_asset/hero-image.png') }}" alt="Ilustrasi Budaya Nusantara"
                    class="hero-image">
            </div>
        </section>

        <section class="category-section">
            <h2 class="section-title">Menjelajahi Keilmuan dan Kekayaan Warisan Indonesia</h2>
            <div class="category-grid">
                <a href="/budaya/ragam" class="category-card card-style-1">
                    <img src="{{ asset('images/explore_asset/ragam-budaya.jpg') }}" alt="Ragam Budaya" class="card-image-1">
                    <div class="card-content-1">
                        <h3 class="card-title-1">Ragam Budaya</h3>
                        <p class="card-description-1">Seni, tarian, dan keunikan suku-suku di Indonesia.
                        </p>
                    </div>
                </a>
                <a href="/explore/tradisi" class="category-card card-style-1">
                    <img src="{{ asset('images/explore_asset/tradisi.jpg') }}" alt="Tradisi & Adat Istiadat"
                        class="card-image-1">
                    <div class="card-content-1">
                        <h3 class="card-title-1">Tradisi & Adat Istiadat</h3>
                        <p class="card-description-1">Jelajahi tradisi dan adat istiadat dari seluruh
                            penjuru negeri.</p>
                    </div>
                </a>
                <a href="/explore/bahasa" class="category-card card-style-1">
                    <img src="{{ asset('images/explore_asset/bahasa.jpg') }}" alt="Bahasa & Aksara Kuno"
                        class="card-image-1">
                    <div class="card-content-1">
                        <h3 class="card-title-1">Bahasa & Aksara Kuno</h3>
                        <p class="card-description-1">Pelajari bahasa dan aksara kuno yang masih
                            lestari.</p>
                    </div>
                </a>
                <a href="/explore/tokoh" class="category-card card-style-2">
                    <img src="{{ asset('images/explore_asset/tokoh.jpg') }}" alt="Tokoh Budaya" class="card-image-2">
                    <div class="card-content-2">
                        <h3 class="card-title-2">Tokoh Budaya</h3>
                        <p class="card-description-2">Kenali sosok inspiratif di balik keberagaman
                            budaya.</p>
                    </div>
                </a>
                <a href="/explore/peninggalan" class="category-card card-style-2">
                    <img src="{{ asset('images/explore_asset/candi.jpg') }}" alt="Peninggalan Sejarah" class="card-image-2">
                    <div class="card-content-2">
                        <h3 class="card-title-2">Peninggalan Sejarah</h3>
                        <p class="card-description-2">Temukan keajaiban dari warisan sejarah dan
                            purbakala.</p>
                    </div>
                </a>
            </div>
        </section>

        <section class="culinary-section">
            <h2 class="section-title">Ragam Kuliner Nusantara</h2>
            <div class="culinary-list">
                @forelse($makanans as $makanan)
                    <a href="/explore/kuliner/{{ $makanan->makanan_id }}" class="culinary-card">
                        <img src="{{ asset('images/makanans/' . $makanan->gambar) }}" alt="{{ $makanan->nama }}"
                            class="culinary-image">
                        <div class="culinary-content">
                            <h3 class="culinary-title">{{ $makanan->nama }}</h3>
                            <p class="culinary-origin">
                                {{ optional($makanan->lokasis)->nama ?? 'Kuliner Nusantara' }}</p>
                        </div>
                    </a>
                @empty
                    <p>Tidak ada data kuliner yang tersedia saat ini.</p>
                @endforelse
            </div>
            <a href="/explore/kuliner" class="btn-primary">Jelajahi Kuliner Lainnya</a>
        </section>

        <section class="articles-section">
            <h2 class="section-title">Ragam Artikel Budaya Nusantara</h2>
            <div class="articles-list">
                @forelse($artikels as $artikel)
                    <a href="/explore/artikel/{{ $artikel->artikel_id }}" class="article-card">
                        <img src="{{ asset('images/artikels/' . $artikel->gambar) }}" alt="{{ $artikel->title }}"
                            class="article-image">
                        <div class="article-content">
                            <h3 class="article-title">{{ $artikel->title }}</h3>
                            <p class="article-meta">oleh
                                {{ optional($artikel->users)->name ?? $artikel->penulis }} | {{ $artikel->topic }}</p>
                            <p class="article-excerpt">{{ Str::limit($artikel->content, 100) }}</p>
                        </div>
                    </a>
                @empty
                    <p>Tidak ada artikel yang tersedia saat ini.</p>
                @endforelse
            </div>
            <a href="/explore/artikel" class="btn-primary">Baca Artikel Lainnya</a>
        </section>

        <section class="pustaka-section">
            <h2 class="section-title">Pustaka Nusantara</h2>
            <div class="pustaka-list">
                @forelse($pustakas as $pustaka)
                    <a href="/explore/pustaka/{{ $pustaka->pustaka_id }}" class="pustaka-card">
                        <img src="{{ asset('images/pustakas/' . $pustaka->gambar) }}" alt="{{ $pustaka->judul }}"
                            class="pustaka-image">
                        <div class="pustaka-content">
                            <h3 class="pustaka-title">{{ $pustaka->judul }}</h3>
                            <p class="pustaka-origin">{{ $pustaka->author }}</p>
                        </div>
                    </a>
                @empty
                    <p>Tidak ada data pustaka yang tersedia saat ini.</p>
                @endforelse
            </div>
            <a href="/explore/pustaka" class="btn-primary">Jelajahi Pustaka</a>
        </section>

        <section class="event-section">
            <h2 class="section-title">Jelajahi Harmoni Event Budaya Nusantara</h2>
            <div class="event-list">
                @forelse($events as $event)
                    <a href="/explore/event/{{ $event->event_id }}" class="event-card">
                        <img src="{{ asset('images/events/' . $event->gambar) }}" alt="{{ $event->nama }}"
                            class="event-image">
                        <div class="event-content">
                            <h3 class="event-title">{{ $event->nama }}</h3>
                            <p class="event-meta">Event Budaya</p>
                        </div>
                    </a>
                @empty
                    <p>Tidak ada event yang tersedia saat ini.</p>
                @endforelse
            </div>
            <a href="/explore/event" class="btn-primary">Jelajahi Event Budaya Nusantara</a>
        </section>
    </main>
@endsection
