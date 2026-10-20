<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>
</head>
<body>
    <h1>Edit Berita</h1>

    <a href="{{ route('admin.news.index') }}">Kembali</a>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form
        action="{{ route('admin.news.update', $news) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <p>
            <label>Judul Berita</label><br>
            <input
                type="text"
                name="title"
                value="{{ old('title', $news->title) }}"
                required
            >
        </p>

        <p>
            <label>Isi Berita</label><br>
            <textarea
                name="content"
                rows="8"
                required
            >{{ old('content', $news->content) }}</textarea>
        </p>

        @if ($news->image)
            <p>Gambar saat ini:</p>
            <img
                src="{{ asset('storage/' . $news->image) }}"
                alt="{{ $news->title }}"
                width="180"
            >
        @endif

        <p>
            <label>Ganti Gambar (opsional)</label><br>
            <input
                type="file"
                name="image"
                accept=".jpg,.jpeg,.png,.webp"
            >
        </p>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>