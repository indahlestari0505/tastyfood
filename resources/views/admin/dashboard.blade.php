<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Tasty Food</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        header {
            background: #222;
            color: white;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        header h1 {
            margin: 0;
            font-size: 23px;
        }

        .logout-button {
            padding: 10px 16px;
            background: #d92d20;
            color: white;
            border: 0;
            border-radius: 6px;
            cursor: pointer;
        }

        main {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .welcome {
            background: white;
            padding: 28px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .menu-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .menu-card h3 {
            margin-top: 0;
        }

        .menu-card a {
            color: #222;
            font-weight: bold;
        }

        .website-link {
            display: inline-block;
            margin-top: 25px;
            color: #222;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tasty Food Admin</h1>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">
                Logout
            </button>
        </form>
    </header>

    <main>
        <section class="welcome">
            <h2>Dashboard Admin</h2>

            <p>
                Selamat datang,
                <strong>{{ auth()->user()->name }}</strong>.
            </p>

            <p>
                Kamu berhasil login sebagai administrator Tasty Food.
            </p>
        </section>
        <p>
            <a href="{{ route('admin.news.index') }}">
                Kelola Berita
            </a>
        </p>
        <section class="menu">
            <div class="menu-card">
                <h3>Kelola Berita</h3>
                <p>Kelola berita yang akan ditampilkan di website.</p>
                <p><em>Fitur ini akan kita buat pada Task 5.</em></p>
            </div>

            <div class="menu-card">
                <h3>Website User</h3>
                <p>Lihat halaman website yang dapat diakses pengunjung.</p>
                <a href="{{ route('home') }}">Buka Website</a>
            </div>
        </section>

        <a class="website-link" href="{{ route('home') }}">
            ← Kembali ke halaman utama
        </a>
    </main>
</body>
</html>