@extends('layouts.app')

@section('content')
<main>

    <!-- Bagian Hero -->
    <section>
        <div>
            <h1>Explore Budaya Nusantara</h1>
            <p>Budaya tak lagi hanya diceritakan, kini bisa kamu eksplorasi secara digital. Satu klik untuk ribuan tradisi, kuliner, dan seni Nusantara.</p>
        </div>
        <div>
             <img src="{{ asset('images/welcome_asset/budaya-collage.png') }}" alt="Ilustrasi Budaya Nusantara">
        </div>
    </section>

    <!-- Kategori Circle -->
    <section>
        <div>
            <div>
                <img src="https://placehold.co/150x150/dbe8c8/556a3c?text=Budaya" alt="Ragana Budaya">
            </div>
            <h3>Ragana Budaya</h3>
        </div>
        <div>
            <div>
                <img src="https://placehold.co/150x150/dbe8c8/556a3c?text=Kuliner" alt="Kuliner">
            </div>
            <h3>Kuliner</h3>
        </div>
        <div>
            <div>
                <img src="https://placehold.co/150x150/dbe8c8/556a3c?text=Event" alt="Event">
            </div>
            <h3>Event</h3>
        </div>
        <div>
            <div>
                <img src="https://placehold.co/150x150/dbe8c8/556a3c?text=Artikel" alt="Artikel">
            </div>
            <h3>Artikel</h3>
        </div>
        <div>
            <div>
                <img src="https://placehold.co/150x150/dbe8c8/556a3c?text=Pustaka" alt="Pustaka">
            </div>
            <h3>Pustaka</h3>
        </div>
    </section>
    
    <!-- Bagian Ragam Artikel Budaya Nusantara -->
    <section>
        <h2>Ragam Artikel Budaya Nusantara</h2>
        <div id="artikelContainer">
            <!-- Konten artikel akan dimasukkan di sini oleh JavaScript -->
        </div>
    </section>

    <!-- Bagian Jelajahi Event -->
    <section>
        <h2>Jelajahi Harmoni Event Budaya Nusantara</h2>
        <div>
            <div>
                <img src="https://placehold.co/600x400/dbe8c8/556a3c?text=Festival+Nusantara" alt="Festival Nusantara 2024">
            </div>
            <div>
                <img src="https://placehold.co/600x400/dbe8c8/556a3c?text=Tari+Tradisional" alt="Tari Tradisional">
            </div>
        </div>
        <a href="/event">Jelajahi Event Budaya Nusantara</a>
    </section>

</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const artikelContainer = document.getElementById('artikelContainer');

        // Simulasi data artikel dari tabel `artikels`
        const artikels = [
            { judul: "Tari Tradisional Nusantara: Ragam Gerak yang Memukau", deskripsi: "Jelajahi keindahan tari tradisional Indonesia, dari gerak gemulai Jawa hingga hentakan dinamis dari Bali...", gambar: "https://placehold.co/400x250/dbe8c8/556a3c?text=Tari+Nusantara", penulis: "Jane Doe" },
            { judul: "Kekayaan Kuliner Indonesia: 10 Makanan yang Wajib Dicoba", deskripsi: "Cicipi kenikmatan dari berbagai masakan khas Indonesia yang kaya akan rempah-rempah dan cita rasa unik...", gambar: "https://placehold.co/400x250/dbe8c8/556a3c?text=Kuliner+Indonesia", penulis: "John Smith" },
            { judul: "Mengenal Lebih Dekat Batik: Seni dan Sejarah yang Mendalam", deskripsi: "Pelajari sejarah dan filosofi di balik kain batik, warisan budaya yang diakui dunia...", gambar: "https://placehold.co/400x250/dbe8c8/556a3c?text=Batik+Indonesia", penulis: "Michael Brown" }
        ];

        function renderArtikels() {
            artikelContainer.innerHTML = artikels.map(artikel => `
                <div>
                    <img src="${artikel.gambar}" alt="${artikel.judul}">
                    <div>
                        <h3>${artikel.judul}</h3>
                        <p>${artikel.deskripsi}</p>
                        <p>Oleh: ${artikel.penulis}</p>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            `).join('');
        }

        renderArtikels();
    });
</script>
@endsection
