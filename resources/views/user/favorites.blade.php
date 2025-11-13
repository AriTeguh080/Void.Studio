<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/voidxbg.png') }}" type="image/png" sizes="16x16">
    <title>Favorit Anda - VØIDX.STUDIO</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('assets/images/voidxbg.png') }}" alt="Logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/') }}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/') }}#men">Article</a></li>
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
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Favorit Anda</h4>
                                <span>Artikel yang Anda sukai di VØIDX</span>
                                <div class="main-border-button">
                                    <a href="{{ url('/') }}">Kembali ke Home</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/vbgx.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            @if($favorites->count() > 0)
                                @foreach($favorites as $article)
                                    <div class="col-lg-6">
                                        <div class="right-first-image">
                                            <div class="thumb">
                                                <div class="inner-content">
                                                    <h4>{{ $article->name }}</h4>
                                                    <span>{{ Str::limit($article->description, 50) }}</span>
                                                </div>
                                                <div class="hover-content">
                                                    <div class="inner">
                                                        <h4>{{ $article->name }}</h4>
                                                        <p>{{ Str::limit($article->description, 100) }}</p>
                                                        <div class="main-border-button">
                                                            <a href="{{ url('/' . strtolower(str_replace(' ', '', $article->name))) }}">Lihat Detail</a>
                                                        </div>
                                                        <form method="POST" action="{{ route('favorite.add', ['article' => $article->id]) }}" style="display: inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm" style="margin-top: 10px;">Hapus Favorit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->name }}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h4>Anda belum memiliki favorit.</h4>
                                        <p>Tambahkan artikel ke favorit Anda dari halaman utama.</p>
                                        <div class="main-border-button">
                                            <a href="{{ url('/') }}">Jelajahi Artikel</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="{{ asset('assets/images/voidxbg.png') }}" alt="HexaShop eCommerce">
                        </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2025 Vøidx.Studi.Co., Ltd.

                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>

  </body>
</html>
