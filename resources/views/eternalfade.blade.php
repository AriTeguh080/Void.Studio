<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/voidxbg.png') }}" type="image/png" sizes="16x16">
    <title>Eternal Fade - VØIDX.STUDIO</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">
</head>

<body>
    <div class="wrapper d-flex flex-column min-vh-100">
    <!-- Header -->
    <header class="header-area header-sticky">
        
        <div class="container">
            <nav class="main-nav">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('assets/images/voidxbg.png') }}" alt="Logo">
                </a>
                <ul class="nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/#men') }}">Article</a></li>
                    @auth
                        @if(auth()->user()->is_admin)
                            <li><a href="{{ route('admin.dashboard') }}">Edit</a></li>
                        @else
                            <li><a href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a href="{{ route('favorites') }}">Favorit Anda</a></li>
                        @endif
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <div class="container" style="margin-top:100px; text-align:center;">
        <div style="
        background: url('{{ asset('assets/images/efba.jpeg') }}') no-repeat center center/cover;
        color: white;
        padding: auto 0;
        width: 100vw;
        margin-left: calc(-50vw + 50%);
    ">
        @php
            $article = \App\Models\Article::where('name', 'Eternal Fade')->first();
        @endphp
        <br><h1>#3 {{ $article->name ?? 'Eternal Fade' }}</h1><br><br><br>
        <img src="{{ asset('assets/images/efm.jpeg') }}" alt="Eternal Fade" style="width:350px; border-radius:10px;"><br><br><br><br><br>
        <h3>{{ $article->slogan ?? 'The eternal dance between light and shadow.' }}</h3><br>
        <p style="color: white; white-space: pre-line; word-wrap: break-word; max-width: 600px; margin: 0 auto;">
            {{ $article->description ?? 'ETERNAL FADE captures the beauty of transience,
where light and shadow engage in an endless waltz.
It is a reminder that nothing is permanent,
yet every moment holds infinite value.
This piece embodies the delicate balance between presence and absence,
where fading is not an end, but a continuation of the eternal cycle.' }}
        </p>
        <p style="margin-top:20px; color: white;">Price: <strong>${{ $article->price ?? 'xxx.xx' }}</strong></p>
        <p style="margin-top:20px; color: white;">Stock: <strong>{{ $article->stock ?? 'Available' }}</strong></p>
        @auth
            <form method="POST" action="{{ route('favorite.add', ['article' => 3]) }}" style="display: inline;">
                @csrf
                <button type="submit" style="background: #000; border: none; color: #fff; cursor: pointer; padding: 10px 20px; border-radius: 5px; margin-top: 20px;"><img src="{{ asset('assets/images/voidxbg.png') }}" alt="VØIDX.STUDIO" style="height: 20px; width: auto; margin-right: 8px;"><i class="fa fa-star" style="margin-right: 8px;"></i> Add to Favorites</button>
            </form>
        @endauth
    </div>

    <!-- Footer -->
 <footer style="
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    background-color: #2a2a2a;
    padding: 20px 0;
    text-align: center;
    color: white;
">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div class="logo">
            <img src="{{ asset('assets/images/voidxbg.png') }}" 
                 alt="VØIDX.STUDIO" 
                 style="height:70px; width:auto; margin-bottom:10px;">
        </div>

        <p style="margin:0; color: white;">Copyright © 2025 Vøidx.Studi.Co., Ltd.</p>

        <ul style="list-style:none; padding:0; margin-top:10px;">
            <li style="display:inline-block; margin:0 10px;">
                <a href="#" style="color:white;"><i class="fa fa-facebook"></i></a>
            </li>
            <li style="display:inline-block; margin:0 10px;">
                <a href="#" style="color:white;"><i class="fa fa-instagram"></i></a>
            </li>
            <li style="display:inline-block; margin:0 10px;">
                <a href="#" style="color:white;"><i class="fa fa-envelope"></i></a>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>
