
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pesan | Tasty Food Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="admin-layout">

    @include('admin.partials.sidebar')

    <div class="admin-content">

        <header class="admin-topbar">
            <div class="topbar-left">
                <button type="button"
                    class="sidebar-toggle"
                    id="sidebarToggle"
                    aria-label="Buka menu">
                    ☰
                </button>

                <div>
                    <span class="topbar-subtitle">ADMINISTRATION</span>
                    <h2>Edit Pesan</h2>
                </div>
            </div>

            <a href="{{ route('home') }}"
                target="_blank"
                class="topbar-website">
                Lihat Website ↗
            </a>
        </header>

        <main class="admin-main">

            <div class="admin-heading">
                <div>
                    <p class="admin-eyebrow">KOMUNIKASI PENGUNJUNG</p>
                    <h1>Edit Pesan</h1>
                    <p>Perbarui informasi pesan yang diterima.</p>
                </div>

                <a href="{{ route('admin.messages.index') }}"
                    class="admin-button secondary">
                    ← KEMBALI
                </a>
            </div>

            @if ($errors->any())
                <div class="admin-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <section class="admin-panel">

                <form
                    class="admin-form"
                    action="{{ route('admin.messages.update', $message) }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    <div class="admin-form-grid">

                        <div class="admin-field full">
                            <label for="name">Nama Pengirim</label>

                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name', $message->name) }}"
                                required>
                        </div>

                        <div class="admin-field full">
                            <label for="email">Email Pengirim</label>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email', $message->email) }}"
                                required>
                        </div>

                        <div class="admin-field full">
                            <label for="subject">Subjek Pesan</label>

                            <input
                                id="subject"
                                name="subject"
                                type="text"
                                maxlength="150"
                                value="{{ old('subject', $message->subject) }}"
                                required>
                        </div>

                        <div class="admin-field full">
                            <label for="message">Isi Pesan</label>

                            <textarea
                                id="message"
                                name="message"
                                required>{{ old('message', $message->message) }}</textarea>
                        </div>

                    </div>

                    <div class="admin-form-actions">

                        <button type="submit" class="admin-button">
                            SIMPAN PERUBAHAN
                        </button>

                        <a href="{{ route('admin.messages.index') }}"
                            class="admin-button secondary">
                            BATAL
                        </a>

                    </div>

                </form>

            </section>

            <p class="admin-footer">
                TASTY FOOD · PANEL ADMIN
            </p>

        </main>

    </div>

</div>

<script src="{{ asset('js/admin.js') }}"></script>

</body>
</html>
