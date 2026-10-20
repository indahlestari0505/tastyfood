@extends('layouts.site')

@section('title', 'Kontak')
@section('header-class', 'inner-header')
@section('hero-title', 'KONTAK KAMI')

@section('content')
    <section class="container contact-section section-pad">
        <h2>KONTAK KAMI</h2>

        @if (session('success'))
            <div class="notice success" role="status">{{ session('success') }}</div>
        @endif

        <form class="contact-form" action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="form-fields">
                <div class="form-stack">
                    <label class="sr-only" for="subject">Subjek</label>
                    <input id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}" required maxlength="150">
                    @error('subject')<small class="field-error">{{ $message }}</small>@enderror

                    <label class="sr-only" for="name">Nama</label>
                    <input id="name" name="name" placeholder="Name" value="{{ old('name') }}" required maxlength="120">
                    @error('name')<small class="field-error">{{ $message }}</small>@enderror

                    <label class="sr-only" for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required maxlength="190">
                    @error('email')<small class="field-error">{{ $message }}</small>@enderror
                </div>

                <div class="message-field">
                    <label class="sr-only" for="message">Pesan</label>
                    <textarea id="message" name="message" placeholder="Message" required maxlength="5000">{{ old('message') }}</textarea>
                    @error('message')<small class="field-error">{{ $message }}</small>@enderror
                </div>
            </div>
            <button class="button submit-button" type="submit">KIRIM PESAN</button>
        </form>

        <div class="contact-details">
            <div>
                <span class="contact-icon" aria-hidden="true">✉</span>
                <h3>EMAIL</h3>
                <a href="mailto:tastyfood@gmail.com">tastyfood@gmail.com</a>
            </div>
            <div>
                <span class="contact-icon" aria-hidden="true">☎</span>
                <h3>PHONE</h3>
                <a href="tel:+6281234567890">+62 812 3456 7890</a>
            </div>
            <div>
                <span class="contact-icon" aria-hidden="true">⌖</span>
                <h3>LOCATION</h3>
                <p>Kota Bandung, Jawa Barat</p>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <iframe title="Peta Kota Bandung" src="https://maps.google.com/maps?q=Bandung%2C%20Jawa%20Barat&t=&z=13&ie=UTF8&iwloc=&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
