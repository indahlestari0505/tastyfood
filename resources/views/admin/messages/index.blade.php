
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Pesan | Tasty Food Admin</title>
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
                    <h2>Kelola Pesan</h2>
                </div>
            </div>

            <a href="{{ route('home') }}"
                target="_blank"
                class="topbar-website">
                Lihat Website ↗
            </a>
        </header>

        <main class="admin-main">

            @if (session('success'))
                <div class="admin-alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="admin-heading">
                <div>
                    <p class="admin-eyebrow">KOMUNIKASI PENGUNJUNG</p>
                    <h1>Kelola Pesan</h1>
                    <p>Semua pesan yang dikirim melalui halaman Kontak.</p>
                </div>
            </div>

            <section class="admin-panel">

                <div class="admin-panel-head">
                    <div>
                        <h2>Pesan Masuk</h2>
                        <p>Daftar pesan dari pengunjung website.</p>
                    </div>

                    <span class="admin-count">
                        {{ $messages->total() }} pesan
                    </span>
                </div>

                @forelse ($messages as $item)

                    <article class="admin-item message-item">

                        <div class="message-avatar">
                            {{ strtoupper(substr($item->name, 0, 1)) }}
                        </div>

                        <div class="admin-item-copy">

                            <div class="admin-meta">
                                {{ $item->created_at->format('d M Y, H:i') }}
                            </div>

                            <h3>{{ $item->subject }}</h3>

                            <p>
                                <strong>{{ $item->name }}</strong>
                                · {{ $item->email }}
                            </p>

                            <p>
                                {{ \Illuminate\Support\Str::limit($item->message, 150) }}
                            </p>

                        </div>

                        <div class="admin-actions">

                            <a href="{{ route('admin.messages.edit', $item) }}">
                                Edit
                            </a>

                            <form
                                action="{{ route('admin.messages.destroy', $item) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="admin-button danger">
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </article>

                @empty

                    <div class="admin-empty">
                        <span class="admin-empty-icon">✉</span>
                        <h3>Belum ada pesan</h3>
                        <p>Pesan dari pengunjung akan muncul di sini.</p>
                    </div>

                @endforelse

                @if ($messages->hasPages())
                    <div class="admin-pagination">
                        {{ $messages->links() }}
                    </div>
                @endif

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
