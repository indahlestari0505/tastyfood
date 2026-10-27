@extends('layouts.site')

@section('title', 'Berita')
@section('header-class', 'inner-header')
@section('hero-title', 'BERITA KAMI')

@section('content')
    @if ($news->isNotEmpty())
        <section class="section-pad admin-stories">
            <div class="container">
                <div class="section-heading">
                    <div><span class="eyebrow-line"></span><p class="section-kicker">DARI DAPUR TASTY FOOD</p><h2>BERITA TERBARU</h2></div>
                    <p>Informasi dan cerita terbaru dari Tasty Food.</p>
                </div>
                <div class="article-grid">
                    @foreach ($news as $item)
                        <article class="news-card">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" loading="lazy">
                            @else
                                <img src="{{ asset('assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Hidangan Tasty Food" loading="lazy">
                            @endif
                            <div class="news-body">
                                <p class="news-date">{{ $item->created_at?->translatedFormat('d F Y') }}</p>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ Str::limit(strip_tags($item->content), 150) }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="featured-story section-pad soft-bg">
        <div class="container split">
            <img class="story-image" src="{{ asset('assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Salad segar dalam piring" loading="lazy">
            <div>
                <h2>Apa saja makanan khas Nusantara?</h2>
                <p>Indonesia memiliki kekayaan kuliner yang luar biasa. Dari bumbu yang harum hingga bahan lokal yang segar, setiap daerah punya cerita istimewa di balik hidangannya.</p>
                <p>Di Tasty Food, inspirasi dari ragam kuliner itu kami padukan dengan bahan pilihan dan sentuhan yang lebih segar untuk sajian sehari-hari.</p>
            </div>
        </div>
    </section>

    <section class="section-pad" id="berita-lain">
        <div class="container">
            <h2>BERITA LAINNYA</h2>
            <div class="article-grid">
                @foreach ([
                    ['monika-grabkowska-P1aohbiT-EY-unsplash.jpg', 'Mulai dari bahan yang segar', 'Bahan segar membantu menghadirkan rasa terbaik di setiap masakan.'],
                    ['jonathan-borba-Gkc_xM3VY34-unsplash.jpg', 'Cerita di balik dapur kami', 'Setiap hidangan melewati proses persiapan yang penuh perhatian.'],
                    ['luisa-brimble-HvXEbkcXjSk-unsplash.jpg', 'Makan sehat dengan cara lezat', 'Pilihan menu seimbang bisa tetap terasa menyenangkan.'],
                    ['michele-blackwell-rAyCBQTH7ws-unsplash.jpg', 'Warna alami di piring Anda', 'Sayur dan buah menghadirkan banyak warna dan rasa.'],
                    ['brooke-lark-oaz0raysASk-unsplash.jpg', 'Ide menu untuk akhir pekan', 'Sajian sederhana untuk dinikmati bersama keluarga.'],
                    ['sanket-shah-SVA7TyHxojY-unsplash.jpg', 'Inspirasi hidangan hari ini', 'Temukan kombinasi rasa baru dari dapur Tasty Food.'],
                    ['ella-olsson-mmnKI8kMxpc-unsplash.jpg', 'Kebiasaan baik dimulai dari meja makan', 'Langkah kecil memilih makanan bernutrisi setiap hari.'],
                    ['jimmy-dean-Jvw3pxgeiZw-unsplash.jpg', 'Sarapan penuh energi', 'Awali pagi dengan menu yang segar dan mengenyangkan.'],
                ] as [$image, $title, $copy])
                    <article class="news-card">
                        <img src="{{ asset('assets/' . $image) }}" alt="{{ $title }}" loading="lazy">
                        <div class="news-body"><h3>{{ $title }}</h3><p>{{ $copy }}</p></div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
