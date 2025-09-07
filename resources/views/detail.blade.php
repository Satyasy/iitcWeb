@extends('layouts.app')

@section('title', 'Detail Ragam Budaya')

{{-- Menghubungkan file CSS khusus untuk halaman ini --}}
@push('head')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endpush

@section('content')
    <main class="detail-content">
        <section class="detail-hero">
            <img src="{{ asset('images/ragam_asset/tari_tradisional.jpg') }}" alt="Gambar Utama" class="detail-main-image">
            <div class="detail-text-overlay">
                <span class="detail-category">Tarian</span>
                <h1 class="detail-title">Tari Puspajali</h1>
                <p class="detail-subtitle">Seni gerak tari dari Bali</p>
            </div>
        </section>

        <section class="detail-body">
            <div class="detail-info-card">
                <div class="info-item">
                    <span class="info-label">Kategori</span>
                    <span class="info-value">Tari Tradisional</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Lokasi</span>
                    <span class="info-value">Bali</span>
                </div>
            </div>

            <div class="detail-text-content">
                <p>Tari Puspajali adalah salah satu tari kreasi baru yang berasal dari Bali. Tari ini diciptakan oleh Ni Ketut Arini, seorang seniman tari kenamaan Bali pada tahun 1978. Nama "Puspajali" diambil dari kata "puspa" yang berarti bunga dan "jali" yang berarti sejati. Secara harfiah, Puspajali dapat diartikan sebagai "bunga sejati". Tari ini merupakan bentuk persembahan dan penghormatan kepada para dewa yang diyakini bersemayam di alam semesta.</p>
                
                <p>Gerakan Tari Puspajali memiliki ciri khas yang lembut dan anggun, namun juga dinamis dan penuh semangat. Gerakan-gerakan ini terinspirasi dari gerakan bunga yang sedang mekar, menari-nari ditiup angin, dan juga gerakan-gerakan dari tarian-tarian klasik Bali. Tari ini seringkali dipentaskan pada upacara-upacara keagamaan di pura, serta menjadi salah satu tarian penyambutan untuk tamu penting. Kostum yang dikenakan oleh para penari biasanya berwarna cerah, seperti merah, kuning, atau hijau, yang melambangkan keindahan alam dan keagungan spiritual.</p>
            </div>
        </section>
    </main>
@endsection
