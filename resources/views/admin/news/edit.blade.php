
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Berita | Tasty Food Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="admin-layout">

    @include('admin.partials.sidebar')

    <div class="admin-content">

        <header class="admin-topbar">
            <div class="topbar-left">
                <button type="button" class="sidebar-toggle"
                    id="sidebarToggle" aria-label="Buka menu">
                    ☰
                </button>
                <div>
                    <span class="topbar-subtitle">ADMINISTRATION</span>
                    <h2>Edit Berita</h2>
                </div>
            </div>

            <a href="{{ route('news') }}" target="_blank"
                class="topbar-website">
                Lihat Website ↗
            </a>
        </header>

        <main class="admin-main">

            <div class="admin-heading">
                <div>
                    <p class="admin-eyebrow">RUANG REDAKSI</p>
                    <h1>Edit Berita</h1>
                    <p>Perbarui informasi berita yang sudah diterbitkan.</p>
                </div>

                <a class="admin-button secondary"
                    href="{{ route('admin.news.index') }}">
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

                <form class="admin-form"
                    action="{{ route('admin.news.update', $news) }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="admin-form-grid">

                        <div class="admin-field full">
                            <label for="title">Judul Berita</label>

                            <input
                                id="title"
                                name="title"
                                type="text"
                                value="{{ old('title', $news->title) }}"
                                maxlength="255"
                                required>

                            @error('title')
                                <span class="admin-help">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="admin-field full">
                            <label for="content">Isi Berita</label>

                            <textarea
                                id="content"
                                name="content"
                                required>{{ old('content', $news->content) }}</textarea>

                            @error('content')
                                <span class="admin-help">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($news->image)
                            <div class="admin-field full">
                                <label>Foto Saat Ini</label>

                                <img
                                    class="admin-preview"
                                    src="{{ asset('storage/' . $news->image) }}"
                                    alt="{{ $news->title }}">
                            </div>
                        @endif

                        <div class="admin-field full">
                            <label for="image">
                                Ganti Foto
                                <span style="font-weight:400;color:#888">
                                    (Opsional)
                                </span>
                            </label>

                            <input
                                id="image"
                                name="image"
                                type="file"
                                accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">

                            <span class="admin-help">
                                JPG, PNG, atau WebP. Maksimal 5 MB.
                                Kosongkan jika tidak ingin mengganti foto.
                            </span>

                            @error('image')
                                <span class="admin-help">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="admin-form-actions">
                        <button class="admin-button" type="submit">
                            SIMPAN PERUBAHAN
                        </button>

                        <a class="admin-button secondary"
                            href="{{ route('admin.news.index') }}">
                            BATAL
                        </a>
                    </div>

                </form>

            </section>

            <p class="admin-footer">TASTY FOOD · PANEL ADMIN</p>

        </main>
    </div>
</div>

<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
