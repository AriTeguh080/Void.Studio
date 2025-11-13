<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/voidxbg.png') }}" type="image/png" sizes="16x16">
    <title>Admin Dashboard - VØIDX.STUDIO</title>


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
                            <li class="scroll-to-section"><a href="#men" class="active">Edit Articles</a></li>
                            @auth
                                @if(auth()->user()->is_admin)
                                    <li><a href="{{ route('admin.dashboard') }}">Edit</a></li>
                                @else
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
                                <h4>Admin Dashboard</h4>
                                <span>Manage VØIDX Articles</span>
                                <div class="main-border-button">
                                    <a href="{{ url('/') }}">Back to Home</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/vbgx.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Article Management</h4>
                                            <span>Add and edit articles</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Article Management</h4>
                                                <p>Manage all articles in the VØIDX collection.</p>
                                                <div class="main-border-button">
                                                    <a href="#men">Manage Articles</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/voidxbg.png') }}" alt="">
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
                        <h2>Manage Articles</h2>
                        <span>Add new articles or edit existing ones.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Create New Article Form -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3>Add New Article</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.createArticle') }}" method="POST" enctype="multipart/form-data" id="createArticleForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Article Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slogan">Slogan</label>
                                            <input type="text" class="form-control" id="slogan" name="slogan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Article Image</label>
                                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="background_image">Background Image</label>
                                            <input type="file" class="form-control" id="background_image" name="background_image" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Price ($)</label>
                                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="stock">Stock</label>
                                            <input type="number" class="form-control" id="stock" name="stock" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Article</button>
                            </form>
                        </div>
                    </div>

                    <!-- Existing Articles Management -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Existing Articles</h3>
                        </div>
                        <div class="card-body">
                            @foreach($articles as $article)
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h4>{{ $article->name }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.updateArticle', $article) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $article->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Slogan</label>
                                                        <input type="text" class="form-control" name="slogan" value="{{ $article->slogan }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" rows="3" required>{{ $article->description }}</textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Current Article Image</label>
                                                        @if($article->image)
                                                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->name }}" style="width: 100px; height: auto;">
                                                        @endif
                                                        <input type="file" class="form-control mt-2" name="image" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Current Background Image</label>
                                                        @if($article->background_image)
                                                            <img src="{{ asset('storage/' . $article->background_image) }}" alt="{{ $article->name }} Background" style="width: 100px; height: auto;">
                                                        @endif
                                                        <input type="file" class="form-control mt-2" name="background_image" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Price ($)</label>
                                                        <input type="number" step="0.01" class="form-control" name="price" value="{{ $article->price }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Stock</label>
                                                        <input type="number" class="form-control" name="stock" value="{{ $article->stock }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Update Article</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

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
