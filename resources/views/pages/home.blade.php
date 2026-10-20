@extends('layouts.site')

@section('title', 'Home')

@section('content')
    <section class="home-hero">
        <div class="container hero-copy">
            <span class="eyebrow-line" aria-hidden="true"></span>
            <h1>HEALTHY<br><strong>TASTY FOOD</strong></h1>
            <p>Hidangan sehat dari bahan segar pilihan. Nikmati makanan penuh rasa yang baik untuk tubuh dan menyenangkan untuk setiap momen.</p>
            <a class="button" href="{{ route('about') }}">TENTANG KAMI</a>
        </div>
        <img class="hero-food" src="{{ asset('assets/img-4-2000x2000.png') }}" alt="Hidangan sehat Tasty Food">
    </section>

    <section class="intro section-pad">
        <div class="narrow center">
            <h2>TENTANG KAMI</h2>
            <p>Kami percaya makanan yang baik dimulai dari bahan terbaik. Setiap hidangan diracik dengan perhatian pada rasa, kesegaran, dan kualitas.</p>
            <span class="rule" aria-hidden="true"></span>
        </div>
    </section>

    <section class="features" aria-label="Keunggulan Tasty Food">
        <div class="container feature-grid">
            @foreach ([
                ['img-1.png', 'Bahan Segar', 'Pilihan bahan berkualitas untuk setiap hidangan.'],
                ['img-2.png', 'Diolah Sepenuh Hati', 'Rasa lezat dan seimbang dalam setiap sajian.'],
                ['img-3.png', 'Pilihan Sehat', 'Menu yang memberi energi untuk hari Anda.'],
                ['img-4.png', 'Selalu Lezat', 'Makanan bergizi yang tetap menggugah selera.'],
            ] as [$image, $title, $copy])
                <article class="feature-card">
                    <img src="{{ asset('assets/' . $image) }}" alt="" loading="lazy">
                    <h3>{{ $title }}</h3>
                    <p>{{ $copy }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section-pad news-preview">
        <div class="container">
            <h2 class="center">BERITA KAMI</h2>
            <div class="news-grid">
                <article class="news-card news-feature">
                    <img src="{{ asset('assets/anna-pelzer-IGfIGP5ONV0-unsplash.jpg') }}" alt="Sajian sehat" loading="lazy">
                    <div class="news-body">
                        <h3>Hidangan sehat untuk setiap hari</h3>
                        <p>Ide sederhana untuk menikmati makanan bernutrisi tanpa meninggalkan rasa yang Anda sukai.</p>
                        <a class="read-more" href="{{ route('news') }}">Baca selengkapnya <span aria-hidden="true">→</span></a>
                    </div>
                </article>
                @foreach ([
                    ['jonathan-borba-Gkc_xM3VY34-unsplash.jpg', 'Rahasia bahan segar'],
                    ['luisa-brimble-HvXEbkcXjSk-unsplash.jpg', 'Dari dapur kami'],
                    ['michele-blackwell-rAyCBQTH7ws-unsplash.jpg', 'Inspirasi menu minggu ini'],
                    ['brooke-lark-oaz0raysASk-unsplash.jpg', 'Kreasi penuh warna'],
                ] as [$image, $title])
                    <article class="news-card">
                        <img src="{{ asset('assets/' . $image) }}" alt="{{ $title }}" loading="lazy">
                        <div class="news-body">
                            <h3>{{ $title }}</h3>
                            <p>Temukan cerita dan inspirasi seputar sajian lezat bersama Tasty Food.</p>
                            <a class="read-more" href="{{ route('news') }}">Baca selengkapnya <span aria-hidden="true">→</span></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-pad gallery-preview">
        <div class="container">
            <h2 class="center">GALERI KAMI</h2>
            <div class="preview-grid">
                @foreach ([
                    'brooke-lark-1Rm9GLHV0UA-unsplash.jpg',
                    'img-2.png',
                    'sanket-shah-SVA7TyHxojY-unsplash.jpg',
                    'eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg',
                    'fathul-abrar-T-qI_MI2EMA-unsplash.jpg',
                    'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg',
                ] as $image)
                    <img src="{{ asset('assets/' . $image) }}" alt="Hidangan Tasty Food" loading="lazy">
                @endforeach
            </div>
            <div class="center">
                <a class="button" href="{{ route('gallery') }}">LIHAT LEBIH BANYAK</a>
            </div>
        </div>
    </section>
@endsection
