<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Tasty Food</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: white;
            width: 100%;
            max-width: 420px;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 8px;
            text-align: center;
            color: #222;
        }

        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 28px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 7px;
            margin-bottom: 18px;
            font-size: 15px;
        }

        button {
            width: 100%;
            border: none;
            padding: 13px;
            border-radius: 7px;
            background: #222;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #444;
        }

        .error {
            background: #fff0f0;
            color: #b42318;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 22px;
            color: #555;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h1>Tasty Food</h1>
        <p class="subtitle">Login Admin</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.login.process') }}"
                method="POST">
            @csrf

            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Masukkan email admin"
                autocomplete="username"
                required
                autofocus
            >

            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukkan password"
                autocomplete="current-password"
                required
            >

            <button type="submit">Masuk sebagai Admin</button>
        </form>

        <a href="{{ route('home') }}" class="back">
            Kembali ke Website
        </a>
    </div>
</body>
</html>