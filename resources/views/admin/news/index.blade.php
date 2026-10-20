<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Berita - Tasty Food</title>
</head>
<body>
    <h1>Kelola Berita Tasty Food</h1>

    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    |
    <a href="{{ route('admin.news.create') }}">+ Tambah Berita</a>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @forelse ($news as $item)
        <hr>
        <h3>{{ $item->title }}</h3>

        @if ($item->image)
            <img
                src="{{ asset('storage/' . $item->image) }}"
                alt="{{ $item->title }}"
                width="180"
            >
        @endif

        <p>{{ Str::limit($item->content, 150) }}</p>

        <a href="{{ route('admin.news.edit', $item) }}">Edit</a>

        <form
            action="{{ route('admin.news.destroy', $item) }}"
            method="POST"
            style="display:inline"
            onsubmit="return confirm('Yakin ingin menghapus berita ini?')"
        >
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    @empty
        <p>Belum ada berita.</p>
    @endforelse

    {{ $news->links() }}
</body>
</html>