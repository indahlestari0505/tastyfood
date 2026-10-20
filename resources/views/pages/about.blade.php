@extends('layouts.site')

@section('title', 'Tentang Kami')
@section('header-class', 'inner-header')
@section('hero-title', 'TENTANG KAMI')

@section('content')
    <section class="about-lead section-pad soft-bg">
        <div class="container split">
            <div>
                <h2>TASTY FOOD</h2>
                <p><strong>Kami menyajikan makanan yang terasa istimewa sekaligus baik untuk tubuh.</strong></p>
                <p>Berawal dari kecintaan pada makanan segar, Tasty Food hadir untuk membuat pilihan sehat terasa lebih dekat dan menyenangkan. Kami memilih bahan dengan cermat dan mengolahnya dengan penuh perhatian.</p>
            </div>
            <div class="photo-pair">
                <img src="{{ asset('assets/brooke-lark-1Rm9GLHV0UA-unsplash.jpg') }}" alt="Salad segar" loading="lazy">
                <img src="{{ asset('assets/jonathan-borba-Gkc_xM3VY34-unsplash.jpg') }}" alt="Koki menyiapkan hidangan" loading="lazy">
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container values">
            <div class="values-photos">
                <img src="{{ asset('assets/anna-pelzer-IGfIGP5ONV0-unsplash.jpg') }}" alt="Hidangan kaya sayuran" loading="lazy">
                <img src="{{ asset('assets/anh-nguyen-kcA-c3f_3FE-unsplash.jpg') }}" alt="Makanan disiapkan dengan segar" loading="lazy">
            </div>
            <div>
                <h2>VISI</h2>
                <p>Menjadi pilihan terpercaya bagi siapa pun yang ingin menikmati makanan sehat, segar, dan penuh cita rasa setiap hari.</p>
            </div>
            <div>
                <h2>MISI</h2>
                <p>Mengolah bahan berkualitas menjadi hidangan yang lezat, menyediakan pilihan seimbang, dan menyebarkan kebiasaan makan baik dengan cara yang menyenangkan.</p>
            </div>
            <img class="wide-food" src="{{ asset('assets/monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="Bahan segar pilihan" loading="lazy">
        </div>
    </section>
@endsection
