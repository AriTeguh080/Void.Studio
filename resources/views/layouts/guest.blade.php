<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        /* === Reset dasar === */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: url("{{ asset('assets/images/vbgx.jpeg') }}") no-repeat center center fixed;
            background-size: cover; /* gambar menutupi seluruh layar */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }

        /* === Container utama === */
        .container {
            background-color: #fff;
            border: 2px solid #222;
            border-radius: 12px;
            padding: 40px 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.08);
            text-align: center;
        }

        /* === Logo === */
        .logo {
            display: block;
            margin: 0 auto 25px auto;
            width: 180px;
            height: auto;
        }

        /* === Judul === */
        h1 {
            font-size: 28px;
            margin-bottom: 8px;
            color: #000;
        }

        h2{
            font-size: 28px;
            margin-bottom: 8px;
            color: #000;
        }

        label{
            font-size: 28px;
            margin-bottom: 8px;
            color: #000;
        }

        p {
             font-size: 17px;
            margin-bottom: 8px;
            color: #000;
        }

        span{
            font-size: 17px;
            margin-bottom: 8px;
            color: #000;
            text-align: left;
        }

        p.subtitle {
            color: #aaa;
            font-size: 14px;
            margin-bottom: 25px;
        }

        /* === Input dan label === */
        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 15px;
            border: 2px solid #000;
            border-radius: 6px;
            background-color: #fff;
            color: #000;
            font-size: 15px;
            transition: all 0.2s ease-in-out;
        }

        input:focus {
            background-color: #e6e6e6;
            outline: none;
            border-color: #555;
        }

        /* === Tombol === */
        button {
            width: 100%;
            background-color: #e50914;
            color: white;
            font-size: 16px;
            padding: 12px 0;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #b00610;
        }

        /* === Link kecil === */
        .links {
            margin-top: 15px;
            font-size: 13px;
        }

        .links a {
            color: #aaa;
            text-decoration: none;
            transition: color 0.2s;
        }

        .links a:hover {
            color: #e50914;
        }

        /* === Checkbox Remember Me === */
        .remember {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
            font-size: 14px;
            color: #aaa;
        }

        .remember input {
            margin-right: 6px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Logo -->

        <!-- Konten Blade -->
        {{ $slot }}
    </div>
</body>
</html>
