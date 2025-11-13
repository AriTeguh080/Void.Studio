<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/voidxbg.png') }}" type="image/png" sizes="16x16">
    <title>VØIDX.STUDIO</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">


    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
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
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#men">Article</a></li>
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
                                <h4>We Are Vøidx.Studio</h4>
                                <span>Find yourself in the VØIDX</span>
                                <div class="main-border-button">
                                    <a href="#">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="assets/images/vbgx.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>#1 Void Line.</h4>
                                            <span>Empty Line For Freedom Expresion.</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Void Line.</h4>
                                                <p>The boundary between existence and emptiness.</p>
                                                <div class="main-border-button">
                                                    <a href="{{ url('/voidline') }}">Discover More</a>
                                                </div>

                                            </div>
                                        </div>
                                        <img src="assets/images/vlm.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>#2 Abyss Whisper.</h4>
                                            <span>Whisper From Emptines.</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Abyss Whisper.</h4>
                                                <p>The voice that calls from the edge of nothingness.</p>
                                                <div class="main-border-button">
                                                    <a href="{{ url('/abysswhisper') }}">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/awm.jpeg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>#3 Eternal Fade.</h4>
                                            <span>Fade Away But Forever.</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Eternal Fade.</h4>
                                                <p>To disappear is not to vanish, but to remain unseen forever.</p>
                                                <div class="main-border-button">
                                                    <a href="{{ url('/eternalfade') }}">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/efm.jpeg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>#4 Nocturne.</h4>
                                            <span>Silence Of The Night.</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>#4 Nocturne.</h4>
                                                <p>An ode to the beauty and chaos of the dark.</p>
                                                <div class="main-border-button">
                                                    <a href="{{ url('/nocturne') }}">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/nrm.jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Our Latest Article</h2>
                        <span>Details that makes Vøidx.Studio different from the other.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ url('/voidline') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('favorite-form-1').submit();"><i class="fa fa-star"></i></a>
                                            <form id="favorite-form-1" method="POST" action="{{ route('favorite.add', ['article' => 1]) }}" style="display: none;">
                                                @csrf
                                            </form></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/vl.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>#1 Void Line.</h4>
                                    <span>Empty Line For Freedom Expresion.</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ url('/abysswhisper') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('favorite-form-2').submit();"><i class="fa fa-star"></i></a>
                                            <form id="favorite-form-2" method="POST" action="{{ route('favorite.add', ['article' => 2]) }}" style="display: none;">
                                                @csrf
                                            </form></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/aw.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>#2 Abyss Whisper.</h4>
                                    <span>Whisper From Emptines.</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ url('/eternalfade') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('favorite-form-3').submit();"><i class="fa fa-star"></i></a>
                                            <form id="favorite-form-3" method="POST" action="{{ route('favorite.add', ['article' => 3]) }}" style="display: none;">
                                                @csrf
                                            </form></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/ef.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>#3 Eternal Fade.</h4>
                                    <span>Fade Away But Forever.</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ url('/nocturne') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('favorite-form-4').submit();"><i class="fa fa-star"></i></a>
                                            <form id="favorite-form-4" method="POST" action="{{ route('favorite.add', ['article' => 4]) }}" style="display: none;">
                                                @csrf
                                            </form></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/nr2.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Nocturne.</h4>
                                    <span>Silence Of The Night.</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Why Vøidx.Studio Exists</h2>
                        <span>Vøidx.Studio was born from the silence between chaos and creation.It represents the unseen the stories that live in the shadows, 
                            the emotions that never find words.
                        <span/>
                        <span>
                        We stand for those who express without speaking, who find beauty in darkness, and meaning in emptiness.
                        Every piece we create is a fragment of rebellion — against conformity, against perfection, against the fear of being misunderstood.
                        <span/>
                        <span>
                        Vøidx.Studio is not just clothing.
                        It’s an echo of what’s real when the world turns away.
                        </span>
                       
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

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
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

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