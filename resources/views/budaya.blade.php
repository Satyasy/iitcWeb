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
                    Jelajahi kekayaan budaya Indonesia, dari tarian, musik, rumah adat, kesenian, hingga warisan batik &
                    tenun.
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
                @forelse($budayas as $budaya)
                    <div class="card">
                        <a href="/budaya/{{ $budaya->id }}">
                            <img src="{{ asset('images/budayas/' . $budaya->gambar) }}" alt="{{ $budaya->judul }}"
                                class="card-image">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">{{ $budaya->judul }}</h4>
                            <p class="card-subtitle">{{ $budaya->kategori }}</p>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada data budaya yang tersedia saat ini.</p>
                @endforelse
            </div>
        </section>

        <section class="my-12 text-center max-w-6xl mx-auto px-4 py-8">
            <h3 class="section-title">Jelajahi lainnya
                <div class="title-underline"></div>
            </h3>
            <div class="button-container">
                <a href="#" class="btn-secondary">Ragam Budaya Nusantara</a>
                <a href="#" class="btn-secondary">Bahasa & Aksara Daerah</a>
                <a href="/ragam" class="btn-secondary">Tradisi & Upacara Adat</a>
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
