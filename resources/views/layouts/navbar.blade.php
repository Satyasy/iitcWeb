<div class="header-full-width">
    <div class="navbar-container">
        <div class="navbar">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/logo1.png') }}" alt="Nusaya Logo" class="logo-img">
                    <img src="{{ asset('images/LOGO IITC 2025.png') }}" alt="Nusaya Logo" class="logo-img logo-img-large"
                        style="width: 100px; height: auto;">
                </a>
            </div>

            <button class="menu-toggle" aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <div class="nav-links" id="nav-menu">
                <a href="/" class="nav-link">Beranda</a>
                <a href="/explore" class="nav-link">Explore</a>
                <a href="/budaya" class="nav-link">Budaya</a>
                <a href="/ragam" class="nav-link">Ragam</a>
                @guest
                    <a href="/login" class="btn-login-mobile">Login</a>
                @endguest
                @auth
                    <a href="/profile" class="btn-login-mobile">Profile</a>
                    <a href="/chatbot" class="nav-link">Chatbot</a>
                @endauth
            </div>

            <div class="btn-login-desktop">
                @guest
                    <a href="/login" class="btn-login">Login</a>
                @endguest
                @auth
                    <a href="/profile" class="btn-login">Profile</a>
                @endauth
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        const currentPath = window.location.pathname;

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (currentPath === '/' && link.getAttribute('href') === '/') {
                link.classList.add('active');
            } else if (currentPath.includes(link.getAttribute('href')) && link.getAttribute('href') !==
                '/') {
                link.classList.add('active');
            }
        });

        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.getElementById('nav-menu');

        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });
    });
</script>
