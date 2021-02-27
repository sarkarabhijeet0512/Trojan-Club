<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <!-- Stylesheets -->
    <link rel="icon" href="favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="css/index_assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/index_assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/index_assets/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/index_assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/index_assets/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="css/index_assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/index_assets/css/free/1.0.0/icon-font.min.css">
    <!-- JavaScript -->
    <script src="css/index_assets/js/libs/modernizr.custom.js"></script>
    <script src="css/index_assets/js/libs/jquery-2.2.4.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js'></script>
    <script  src="css/index_assets/gallery.js"></script>
    @stack('scripts')
</head>
<body>
<div class="main-wrapper">
    <!--Begin header ưrapper-->
    <div class="header-wrapper header-position">
        <header id="header" class="container-header type1">
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="top-left col-sm-6 hidden-xs">
                            <ul class="list-inline">
                                <li>
                                    <a href="mailto:trojanClub@info">
                                        <span class="icon mail-icon"></span>
                                        <span class="text">trojanClub@info</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon phone-icon"></span>
                                        <span class="text">+91-9835139958</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-right col-sm-6 col-xs-12">
                            <ul class="list-inline">
                                <li class="top-search">
                                    <form class="navbar-form search no-margin no-padding">
                                        <input type="text" name="q" class="form-control input-search" placeholder="search..." autocomplete="off">
                                        <button type="submit" class="lnr lnr-magnifier"></button>
                                    </form>
                                </li>
                                <li class="login">
                                    <a href="{{ route('home') }}">Log In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle" style="box-shadow: 0 1px 3px -1px #1a265c36;">
                <div class="container">
                    <div class="logo hidden-sm hidden-xs">
                        <a href="{{ route('user') }}"> <img src="images/logo/logo_header.jpg" style="height:120px;width: 240px" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ route('about') }}">ABOUT US</a>
                                </li>
                                <li>
                                    <a href="{{ route('programs') }}">PROGRAM &amp; EVENTS</a>
                                </li>

                                <li>
                                   <a href="{{ route('gallery') }}">ALUMNI GALLERY</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">REGISTRATION</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="area-mobile-content visible-sm visible-xs">
                        <div class="logo-mobile">
                            <a href="#"> <img src="images/logo-small.png" alt="logo"></a>
                        </div>
                        <div class="mobile-menu ">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
@yield('content')