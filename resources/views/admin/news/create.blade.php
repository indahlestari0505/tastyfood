<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Berita</title>
</head>
<body>
    <h1>Tambah Berita</h1>

    <a href="{{ route('admin.news.index') }}">Kembali</a>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form
        action="{{ route('admin.news.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <p>
            <label>Judul Berita</label><br>
            <input
                type="text"
                name="title"
                value="{{ old('title') }}"
                required
            >
        </p>

        <p>
            <label>Isi Berita</label><br>
            <textarea
                name="content"
                rows="8"
                required
            >{{ old('content') }}</textarea>
        </p>

        <p>
            <label>Gambar Berita (opsional)</label><br>
            <input
                type="file"
                name="image"
                accept=".jpg,.jpeg,.png,.webp"
            >
        </p>

        <button type="submit">Simpan Berita</button>
    </form>
</body>
</html>