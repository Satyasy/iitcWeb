@extends('layouts.app')

@section('content')

<main class="explore-main-content">
    <section class="explore-hero-section">
        <div class="explore-hero-text-container">
            <h1 class="explore-hero-title">Explore Budaya Nusantara</h1>
            <p class="explore-hero-text">Budaya tak lagi hanya diceritakan, kini bisa kamu eksplorasi secara digital. Satu klik untuk ribuan tradisi, kuliner, dan seni Nusantara.</p>
        </div>
        <div class="explore-hero-image-container">
            <img src="{{ asset('images/explore_asset/heroexplore.png') }}" alt="Ilustrasi Budaya Nusantara" class="explore-hero-image">
        </div>
    </section>

    <section class="explore-culinary-section">
        <h2 class="explore-section-title">Ragam Kuliner Nusantara</h2>
        <div class="explore-culinary-list">
            <a href="#" class="explore-culinary-card">
                <img src="{{ asset('images/explore_asset/sate.jpg') }}" alt="Sate Madura" class="explore-culinary-image">
                <div class="explore-culinary-content">
                    <h3 class="explore-culinary-title">Sate Madura</h3>
                    <p class="explore-culinary-origin">Kuliner Khas Madura</p>
                </div>
            </a>
            <a href="#" class="explore-culinary-card">
                <img src="{{ asset('images/explore_asset/rendang.jpg') }}" alt="Rendang" class="explore-culinary-image">
                <div class="explore-culinary-content">
                    <h3 class="explore-culinary-title">Rendang</h3>
                    <p class="explore-culinary-origin">Kuliner Khas Padang</p>
                </div>
            </a>
            <a href="#" class="explore-culinary-card">
                <img src="{{ asset('images/explore_asset/gado-gado.jpg') }}" alt="Gado-Gado" class="explore-culinary-image">
                <div class="explore-culinary-content">
                    <h3 class="explore-culinary-title">Gado-Gado</h3>
                    <p class="explore-culinary-origin">Kuliner Khas Betawi</p>
                </div>
            </a>
            <a href="#" class="explore-culinary-card">
                <img src="{{ asset('images/explore_asset/soto.jpg') }}" alt="Soto" class="explore-culinary-image">
                <div class="explore-culinary-content">
                    <h3 class="explore-culinary-title">Soto</h3>
                    <p class="explore-culinary-origin">Kuliner Khas Nusantara</p>
                </div>
            </a>
        </div>
        <a href="/explore/kuliner" class="explore-btn-primary">Jelajahi Kuliner Lainnya</a>
    </section>

    <section class="explore-articles-section">
        <h2 class="explore-section-title">Ragam Artikel Budaya Nusantara</h2>
        <div class="explore-articles-list">
            <a href="#" class="explore-article-card">
                <img src="{{ asset('images/explore_asset/artikel-utama.jpg') }}" alt="Gamelan: Harmoni yang Mendunia" class="explore-article-image">
                <div class="explore-article-content">
                    <h3 class="explore-article-title">Gamelan: Harmoni yang Mendunia</h3>
                    <p class="explore-article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="explore-article-excerpt">Gamelan adalah alat musik tradisional yang berasal dari Jawa dan Bali, Indonesia...</p>
                </div>
            </a>
            <a href="#" class="explore-article-card">
                <img src="{{ asset('images/explore_asset/artikel-kecil-1.jpg') }}" alt="Tari Saman" class="explore-article-image">
                <div class="explore-article-content">
                    <h3 class="explore-article-title">Tari Saman: Kekompakan Ribuan Tangan</h3>
                    <p class="explore-article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="explore-article-excerpt">Tari Saman adalah salah satu tarian tradisional dari Aceh...</p>
                </div>
            </a>
            <a href="#" class="explore-article-card">
                <img src="{{ asset('images/explore_asset/artikel-kecil-2.jpg') }}" alt="Wajah Manusia Jawa Kuno" class="explore-article-image">
                <div class="explore-article-content">
                    <h3 class="explore-article-title">Wajah Manusia Jawa Kuno di Indonesia</h3>
                    <p class="explore-article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="explore-article-excerpt">Penemuan fosil manusia purba di Jawa memberikan wawasan unik tentang sejarah...</p>
                </div>
            </a>
            <a href="#" class="explore-article-card">
                <img src="{{ asset('images/explore_asset/artikel-kecil-3.jpg') }}" alt="Menjelajahi Sejarah Raja-Raja" class="explore-article-image">
                <div class="explore-article-content">
                    <h3 class="explore-article-title">Menjelajahi Sejarah Raja-Raja di Indonesia</h3>
                    <p class="explore-article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="explore-article-excerpt">Kisah para raja dan kerajaan di Indonesia membentuk...</p>
                </div>
            </a>
            <a href="#" class="explore-article-card">
                <img src="{{ asset('images/explore_asset/artikel-kecil-4.jpg') }}" alt="Festival Gandrung Sewu" class="explore-article-image">
                <div class="explore-article-content">
                    <h3 class="explore-article-title">Festival Gandrung Sewu</h3>
                    <p class="explore-article-meta">oleh Redaksi | Pustaka & Artikel</p>
                    <p class="explore-article-excerpt">Festival Gandrung Sewu adalah perayaan budaya yang megah di Banyuwangi...</p>
                </div>
            </a>
        </div>
        <a href="/explore/artikel" class="explore-btn-primary">Baca Artikel Lainnya</a>
    </section>

    <section class="explore-pustaka-section">
        <h2 class="explore-section-title">Pustaka Nusantara</h2>
        <div class="explore-pustaka-list">
            <a href="#" class="explore-pustaka-card">
                <img src="{{ asset('images/explore_asset/timun-mas.jpg') }}" alt="Timun Mas" class="explore-pustaka-image">
                <div class="explore-pustaka-content">
                    <h3 class="explore-pustaka-title">Timun Mas</h3>
                    <p class="explore-pustaka-origin">Cerita Rakyat</p>
                </div>
            </a>
            <a href="#" class="explore-pustaka-card">
                <img src="{{ asset('images/explore_asset/aksara-jawa.jpg') }}" alt="Aksara Jawa" class="explore-pustaka-image">
                <div class="explore-pustaka-content">
                    <h3 class="explore-pustaka-title">Aksara Jawa (Hanacaraka)</h3>
                    <p class="explore-pustaka-origin">Bahasa & Aksara Kuno</p>
                </div>
            </a>
            <a href="#" class="explore-pustaka-card">
                <img src="{{ asset('images/explore_asset/danau-toba.jpg') }}" alt="Danau Toba" class="explore-pustaka-image">
                <div class="explore-pustaka-content">
                    <h3 class="explore-pustaka-title">Danau Toba</h3>
                    <p class="explore-pustaka-origin">Cerita Rakyat</p>
                </div>
            </a>
        </div>
        <a href="/explore/pustaka" class="explore-btn-primary">Jelajahi Pustaka</a>
    </section>

    <section class="explore-event-section">
        <h2 class="explore-section-title">Jelajahi Harmoni Event Budaya Nusantara</h2>
        <div class="explore-event-list">
            <a href="#" class="explore-event-card">
                <img src="{{ asset('images/explore_asset/event-1.jpg') }}" alt="Festival Nusantara 2024" class="explore-event-image">
                <div class="explore-event-content">
                    <h3 class="explore-event-title">Festival Nusantara 2024</h3>
                    <p class="explore-event-meta">Event Budaya</p>
                </div>
            </a>
            <a href="#" class="explore-event-card">
                <img src="{{ asset('images/explore_asset/event-2.jpg') }}" alt="Tari Tradisional" class="explore-event-image">
                <div class="explore-event-content">
                    <h3 class="explore-event-title">Tari Tradisional</h3>
                    <p class="explore-event-meta">Event Budaya</p>
                </div>
            </a>
        </div>
        <a href="/explore/event" class="explore-btn-primary">Jelajahi Event Budaya Nusantara</a>
    </section>
</main>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const largeCards = document.querySelectorAll('.explore-card-large');

        largeCards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const bgElement = card.querySelector('.explore-card-background');
                if (bgElement) {
                    const translateX = (x / rect.width - 0.5) * 10;
                    const translateY = (y / rect.height - 0.5) * 10;
                    bgElement.style.transform = `scale(1.15) translate(${translateX}%, ${translateY}%)`;
                }
            });

            card.addEventListener('mouseleave', () => {
                const bgElement = card.querySelector('.explore-card-background');
                if (bgElement) {
                    bgElement.style.transform = 'scale(1.1) translate(0, 0)';
                }
            });
        });
    });
</script>
@endpush
