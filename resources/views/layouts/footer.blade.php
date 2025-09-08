<footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <div class="logo">
                <img src="{{ asset('images/logo1.png') }}" alt="Nusaya Logo" class="logo-img">
                {{-- perbesar logo IITC --}}
                <img src="{{ asset('images/LOGO IITC 2025.png') }}" alt="Nusaya Logo" class="logo-img logo-img-large"
                    style="width: 100px; height: auto;">
            </div>
            <p class="footer-text-desc">
                Platform digital untuk melestarikan budaya dan menyatukan Nusantara
            </p>
            <a href="/explore" class="btn-jelajahi">
                Jelajahi Sekarang
            </a>
        </div>

        <div class="footer-right">
            <div class="footer-section">
                <h3 class="footer-title">Beranda</h3>
                <ul class="footer-list">
                    <li><a href="/" class="footer-link">Beranda</a></li>
                    <li><a href="/explore" class="footer-link">Explore</a></li>
                    <li><a href="/budaya" class="footer-link">Budaya</a></li>
                    <li><a href="/artikel" class="footer-link">Artikel</a></li>
                    <li><a href="/pustaka" class="footer-link">Pustaka</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3 class="footer-title">Kontak</h3>
                <ul class="footer-list">
                    <li>nusaya@gmail.com</li>
                    <li>+62 123 4567 890</li>
                    <li>Sidoarjo, Jawa Timur</li>
                </ul>
                <div class="social-media">
                    <a href="#" class="social-icon" data-icon="whatsapp">
                        <svg class="icon" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12.04 2C7.94 2 4.54 3.4 1.94 6.2 1.34 6.8 1.14 7.5 1.14 8.2 1.14 8.9 1.34 9.6 1.94 10.2 4.54 12.8 7.94 14.2 12.04 14.2 16.14 14.2 19.54 12.8 22.14 10.2 22.74 9.6 22.94 8.9 22.94 8.2 22.94 7.5 22.74 6.8 22.14 6.2 19.54 3.4 16.14 2 12.04 2ZM12.04 4.04C15.04 4.04 17.64 5.24 19.84 7.24 20.44 7.84 20.64 8.44 20.64 9.04 20.64 9.64 20.44 10.24 19.84 10.84 17.64 12.84 15.04 14.04 12.04 14.04 9.04 14.04 6.44 12.84 4.24 10.84 3.64 10.24 3.44 9.64 3.44 9.04 3.44 8.44 3.64 7.84 4.24 7.24 6.44 5.24 9.04 4.04 12.04 4.04ZM12.04 6.04C10.64 6.04 9.44 6.64 8.24 7.64 7.64 8.04 7.44 8.64 7.44 9.24 7.44 9.84 7.64 10.44 8.24 11.04 9.44 12.04 10.64 12.64 12.04 12.64 13.44 12.64 14.64 12.04 15.84 11.04 16.44 10.44 16.64 9.84 16.64 9.24 16.64 8.64 16.44 8.04 15.84 7.64 14.64 6.64 13.44 6.04 12.04 6.04Z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon" data-icon="instagram">
                        <svg class="icon" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 2C8.98 2 6.5 4.48 6.5 7.5v9c0 3.02 2.48 5.5 5.5 5.5h6c3.02 0 5.5-2.48 5.5-5.5v-9c0-3.02-2.48-5.5-5.5-5.5h-6zm0 2h6c1.93 0 3.5 1.57 3.5 3.5v9c0 1.93-1.57 3.5-3.5 3.5h-6c-1.93 0-3.5-1.57-3.5-3.5v-9c0-1.93 1.57-3.5 3.5-3.5zm6.5 2c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zm-3.5 3c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon" data-icon="facebook">
                        <svg class="icon" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12c0 5.02 3.66 9.15 8.44 9.98v-7.14H7.13v-2.84h3.31V9.75c0-3.29 1.99-5.12 4.96-5.12 1.44 0 2.68.26 3.04.38v3.42h-2.03c-1.6 0-1.92.76-1.92 1.88v2.48h3.94l-.62 4.31h-3.32v7.14c4.78-.83 8.44-4.96 8.44-9.98 0-5.52-4.48-10-10-10z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        © 2025 Nusaya.
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const socialIcons = document.querySelectorAll('.social-icon');

        socialIcons.forEach(icon => {
            icon.addEventListener('mouseover', function() {
                this.style.transform = 'scale(1.1)';
            });
            icon.addEventListener('mouseout', function() {
                this.style.transform = 'scale(1)';
            });
        });
    });
</script>
