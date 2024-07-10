<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>PKL Pra Industri</title>

    <link rel="shortcut icon" type="image/icon" href="assets1/logo/favicon.png" />
    <link rel="stylesheet" href="assets1/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets1/css/linearicons.css">
    <link rel="stylesheet" href="assets1/css/animate.css">
    <link rel="stylesheet" href="assets1/css/flaticon.css">
    <link rel="stylesheet" href="assets1/css/slick.css">
    <link rel="stylesheet" href="assets1/css/slick-theme.css">
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/bootsnav.css">
    <link rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" href="assets1/css/responsive.css">
</head>

<body>

    <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
                data-minus-value-mobile="55" data-speed="1000">

                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="/haluser">
                            <img src="assets1/images/welcome-hero/smplogo.jpg" alt="Logo" class="logo">
                            PROFILE<span>School</span>
                        </a>
                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="/haluser">Beranda</a></li>
                            <li class="scroll"><a href="#works" class="works">Profil</a></li>
                            <li  class="scroll active"><a href="/fasilitas">Fasilitas</a></li>
                            <li><a href="/kurikulum">Kurikulum</a></li>
                            <li><a href="/ektrakurikuler">Ekstrakurikuler</a></li>
                            <li><a href="{{ route('contact1') }}">Contact</a></li>
                        </ul><!--/.nav -->
                    </div><!--/.navbar-collapse -->

                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->

    </section><!-- /.top-area-->
    <!-- top-area End -->

    <!--welcome-hero start -->
    <section id="home" class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt">
                <h2>SMPN 1 MARGAHAYU</h2>
                <p>Memfasilitasi Muridnya dengan fasilitas yang layak</p>
            </div>
        </div>

    </section><!--/.welcome-hero-->

    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>Fasilitas</h2>
                <p>Fasilitas yang ada di SMPN 1 MARGAHAYU</p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets1/images/welcome-hero/perpus.jpg" alt="explore image">
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2>Gedung Sekolah</h2>
                                {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus magni officia
                                    saepe neque accusamus.</p> --}}
                                {{-- <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">resturent</a>
                                </p> --}}
                                {{-- <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets1/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets1/images/welcome-hero/perpus.jpg" alt="explore image">
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2>Perpustakaan</h2>
                                {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus magni officia
                                    saepe neque accusamus.</p> --}}
                                {{-- <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">resturent</a>
                                </p> --}}
                                {{-- <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets1/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets1/images/welcome-hero/kelas.jpg" alt="explore image">
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2>Kelas</h2>
                                {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus magni officia
                                    saepe neque accusamus.</p> --}}
                                {{-- <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">resturent</a>
                                </p> --}}
                                {{-- <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets1/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets1/images/welcome-hero/pengh.jpeg" alt="explore image">
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2>Penghargaan</h2>
                                {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus magni officia
                                    saepe neque accusamus.</p> --}}
                                {{-- <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">resturent</a>
                                </p> --}}
                                {{-- <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets1/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets1/images/welcome-hero/pengh.jpeg" alt="explore image">
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2>Alumni</h2>
                                {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus magni officia
                                    saepe neque accusamus.</p> --}}
                                {{-- <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">resturent</a>
                                </p> --}}
                                {{-- <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets1/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets1/images/welcome-hero/pengh.jpeg" alt="explore image">
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2>Kurikulum</h2>
                                {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus magni officia
                                    saepe neque accusamus.</p> --}}
                                {{-- <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">resturent</a>
                                </p> --}}
                                {{-- <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets1/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.explore-->
    <!--explore end -->

    <!--reviews start -->
    <section class="reviews">
        <div class="section-header">
            <h2>clients reviews</h2>
            <p>What our client say about us</p>
        </div><!--/.section-header-->
        <div class="reviews-content">
            <div class="testimonial-carousel">
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets1/images/clients/c1.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets1/images/clients/c2.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>monirul islam</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets1/images/clients/c3.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Shohrab Hossain</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets1/images/clients/c4.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets1/images/clients/c1.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets1/images/clients/c2.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>monirul islam</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets1/images/clients/c3.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Shohrab Hossain</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="assets1/images/clients/c4.png" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
            </div>
        </div>

    </section><!--/.reviews-->
    <!--reviews end -->

    <!-- statistics strat -->
    <section id="statistics" class="statistics">
        <div class="container">
            <div class="statistics-counter">
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">87 </div> <span>K+</span>
                        </div><!--/.statistics-content-->
                        <h3>Akreditasi</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">40</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>Penghargaan</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">65</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>Lulusan terbaik</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">50</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>Fasilitas</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
            </div><!--/.statistics-counter-->
        </div><!--/.container-->

    </section><!--/.counter-->
    <!-- statistics end -->

    <!--footer start-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="hm-footer-copyright">
                <div class="row">
                    <div class="col-sm-5">
                        <p>
                            &copy;copyright. Ririn Rosdyanti by <a
                                href="https://www.themesine.com/">Hallo</a>
                        </p><!--/p-->
                    </div>
                    <div class="col-sm-7">
                        <div class="footer-social">
                            <span><i class="fa fa-phone"> 5403834</i></span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>

            </div><!--/.hm-footer-copyright-->
        </div><!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top"
                    title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div><!--/.scroll-Top-->

    </footer><!--/.footer-->
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="assets1/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets1/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets1/js/bootsnav.js"></script>

    <!--feather.min.js-->
    <script src="assets1/js/feather.min.js"></script>

    <!-- counter js -->
    <script src="assets1/js/jquery.counterup.min.js"></script>
    <script src="assets1/js/waypoints.min.js"></script>

    <!--slick.min.js-->
    <script src="assets1/js/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="assets1/js/custom.js"></script>

</body>

</html>
