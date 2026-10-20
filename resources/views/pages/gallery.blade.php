@extends('layouts.site')

@section('title', 'Galeri')
@section('header-class', 'inner-header')
@section('hero-title', 'GALERI KAMI')

@section('content')
    <section class="gallery-slider-section soft-bg">
        <div class="container slider" data-slider>
            <button class="slider-arrow prev" type="button" aria-label="Foto sebelumnya">‹</button>
            <img class="slider-image" src="{{ asset('assets/img-2.png') }}" alt="Hidangan sehat Tasty Food">
            <button class="slider-arrow next" type="button" aria-label="Foto berikutnya">›</button>
            <div class="slider-count"><span data-slide-index>1</span> / 12</div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container gallery-grid">
            @foreach ([
                'img-1.png',
                'brooke-lark-nBtmglfY0HU-unsplash.jpg',
                'sanket-shah-SVA7TyHxojY-unsplash.jpg',
                'ella-olsson-mmnKI8kMxpc-unsplash.jpg',
                'brooke-lark-1Rm9GLHV0UA-unsplash.jpg',
                'fathul-abrar-T-qI_MI2EMA-unsplash.jpg',
                'anna-pelzer-IGfIGP5ONV0-unsplash.jpg',
                'michele-blackwell-rAyCBQTH7ws-unsplash.jpg',
                'mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg',
                'jonathan-borba-Gkc_xM3VY34-unsplash.jpg',
                'monika-grabkowska-P1aohbiT-EY-unsplash.jpg',
                'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg',
            ] as $image)
                <button class="gallery-item" type="button" data-gallery-image="{{ asset('assets/' . $image) }}" aria-label="Lihat foto hidangan">
                    <img src="{{ asset('assets/' . $image) }}" alt="Hidangan Tasty Food" loading="lazy">
                </button>
            @endforeach
        </div>
    </section>

    <dialog class="lightbox" aria-label="Pratinjau foto">
        <button class="lightbox-close" type="button" aria-label="Tutup">×</button>
        <img src="" alt="Pratinjau hidangan">
    </dialog>
@endsection
