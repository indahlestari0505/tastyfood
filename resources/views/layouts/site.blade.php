<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'Tasty Food — makanan sehat, segar, dan penuh rasa.')">
    <meta name="theme-color" content="#f7f8f4">
    <title>@yield('title', 'Tasty Food') | Tasty Food</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
    <a class="sr-only" href="#main-content">Lewati ke konten</a>

    <header class="site-header @yield('header-class')">
        <div class="nav-wrap">
            <a class="brand" href="{{ route('home') }}" aria-label="Tasty Food, beranda">TASTY FOOD</a>
            <button class="menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="main-navigation">☰</button>
            <nav class="main-nav" id="main-navigation" aria-label="Navigasi utama">
                <a @if (request()->routeIs('home')) aria-current="page" class="active" @endif href="{{ route('home') }}">Home</a>
                <a @if (request()->routeIs('about')) aria-current="page" class="active" @endif href="{{ route('about') }}">Tentang</a>
                <a @if (request()->routeIs('news')) aria-current="page" class="active" @endif href="{{ route('news') }}">Berita</a>
                <a @if (request()->routeIs('gallery')) aria-current="page" class="active" @endif href="{{ route('gallery') }}">Galeri</a>
                <a @if (request()->routeIs('contact')) aria-current="page" class="active" @endif href="{{ route('contact') }}">Kontak</a>
            </nav>
        </div>

        @hasSection('hero-title')
            <div class="page-title container">
                <h1>@yield('hero-title')</h1>
            </div>
        @endif
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-about">
                <a class="footer-brand" href="{{ route('home') }}">Tasty Food</a>
                <p>Menghadirkan makanan yang dibuat dengan bahan segar, pilihan terbaik, dan sepenuh hati.</p>
                <div class="socials">
                    <a href="https://facebook.com" aria-label="Facebook"><img src="{{ asset('assets/001-facebook.png') }}" alt=""></a>
                    <a href="https://twitter.com" aria-label="Twitter"><img src="{{ asset('assets/002-twitter.png') }}" alt=""></a>
                </div>
            </div>

            <div>
                <h3>Useful links</h3>
                <a href="{{ route('news') }}">Blog</a>
                <a href="{{ route('about') }}">Tentang Kami</a>
                <a href="{{ route('gallery') }}">Galeri</a>
                <a href="{{ route('contact') }}">Kontak</a>
            </div>

            <div>
                <h3>Privacy</h3>
                <a href="{{ route('about') }}">Karir</a>
                <a href="{{ route('about') }}">Visi &amp; Misi</a>
                <a href="{{ route('contact') }}">Servis</a>
            </div>

            <div>
                <h3>Contact Info</h3>
                <a href="mailto:tastyfood@gmail.com">✉ &nbsp; tastyfood@gmail.com</a>
                <a href="tel:+6281234567890">☎ &nbsp; +62 812 3456 7890</a>
                <span>⌖ &nbsp; Jl. Terusan Mars Utara III No.8D, Bandung</span>
            </div>
        </div>
        <div class="copyright">Copyright © {{ date('Y') }} Tasty Food. All rights reserved.</div>
    </footer>

    <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>
