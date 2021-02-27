<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/line-awesome-font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/alumi_assets/css/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
     <style>
        div::-webkit-scrollbar {
  width: 0px;
  background-color: transparent;
}
div::-webkit-scrollbar-thumb {
  background-color: #CCC;
  border-radius: 2px
}
 textarea::-webkit-scrollbar {
  width: 0px;
  background-color: transparent;
}
textarea::-webkit-scrollbar-thumb {
  background-color: #CCC;
  border-radius: 2px
}
.description{
    min-height: 10em;
  /*max-height: 50vh;*/
  width: 100%;
   font-family: Lato;
}
.post-icons{
    border: 1px solid #b2b2b2;
    border-radius: 7px;
    padding: 16px;
    margin-top: 20px;
}
.loader{
    display: none;
    position: absolute;
    top: 42%;
    left: 42%;
    padding: 2px;
    opacity: 0.1;
}
   /* .pb-cmnt-container {
        font-family: Lato;
        margin-top: 60px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 10px;
        /*height: 130px;
        width: 100%;
        border: 1px solid #F2F2F2;
    }*/
    

</style>

    <script type="text/javascript" src="css/alumi_assets/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/custom.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/delete.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/popper.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="css/alumi_assets/lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/scrollbar.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/script.js"></script>
    <!-- <script type="text/javascript" src="css/alumi_assets/js/ajax.js"></script> -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
@stack('scripts')

    
</head>
<body>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <!-- new header -->
                        <div class="wrapper">   
        <header>
            <div class="container">
                <div class="header-data">
                    <div class="logo">
                        <a href="{{ route('home') }}" title=""><img src="images/.png" alt=""></a>
                    </div><!--logo end-->
                    <div class="search-bar">
                        <form>
                            <input type="text" name="search" placeholder="Search...">
                            <button type="submit"><i class="la la-search"></i></button>
                        </form>
                    </div><!--search-bar end-->
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" title="">
                                    <span><img src="images/icon1.png" alt=""></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="companies.html" title="">
                                    <span><img src="images/icon2.png" alt=""></span>
                                    Companies
                                </a>
                                <ul>
                                    <li><a href="companies.html" title="">Companies</a></li>
                                    <li><a href="company-profile.html" title="">Company Profile</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('AdminIndex') }}" title="">
                                    <span><img src="images/icon3.png" alt=""></span>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="profiles.html" title="">
                                    <span><img src="images/icon4.png" alt=""></span>
                                    Profiles
                                </a>
                                <ul>
                                    <li><a href="{{ route('user') }}" title="">User Profile</a></li>
                                    <li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="jobs.html" title="">
                                    <span><img src="images/icon5.png" alt=""></span>
                                    Jobs
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="not-box-openm">
                                    <span><img src="images/icon6.png" alt=""></span>
                                    Messages
                                </a>
                                <div class="notification-box msg" id="message">
                                    <div class="nt-title">
                                        <h4>Setting</h4>
                                        <a href="#" title="">Clear all</a>
                                    </div>
                                    <div class="nott-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img1.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img2.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img3.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="view-all-nots">
                                            <a href="messages.html" title="">View All Messsages</a>
                                        </div>
                                    </div><!--nott-list end-->
                                </div><!--notification-box end-->
                            </li>
                            <li>
                                <a href="#" title="" class="not-box-open">
                                    <span><img src="images/icon7.png" alt=""></span>
                                    Notification
                                </a>
                                <div class="notification-box noti" id="notification">
                                    <div class="nt-title">
                                        <h4>Setting</h4>
                                        <a href="#" title="">Clear all</a>
                                    </div>
                                    <div class="nott-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img1.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img2.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img3.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img2.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="view-all-nots">
                                            <a href="#" title="">View All Notification</a>
                                        </div>
                                    </div><!--nott-list end-->
                                </div><!--notification-box end-->
                            </li>
                        </ul>
                    </nav><!--nav end-->
                    <div class="menu-btn">
                        <a href="#" title=""><i class="fa fa-bars"></i></a>
                    </div><!--menu-btn end-->
                    <div class="user-account">
                        <div class="user-info">
                            <img style="height: 2rem;" src="{{ asset(Auth::user()->image) }}" alt="">
                            <a href="#" title="">{{ Auth::user()->first_name }}</a>
                            <!-- <i class="la la-sort-down"></i> -->
                        </div>
                        <div class="user-account-settingss" id="users">
                            <h3>Online Status</h3>
                            <ul class="on-off-status">
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c5">
                                        <label for="c5">
                                            <span></span>
                                        </label>
                                        <small>Online</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c6">
                                        <label for="c6">
                                            <span></span>
                                        </label>
                                        <small>Offline</small>
                                    </div>
                                </li>
                            </ul>
                            <h3>Custom Status</h3>
                            <div class="search_form">
                                <form>
                                    <input type="text" name="search">
                                    <button type="submit">Ok</button>
                                </form>
                            </div><!--search_form end-->
                            <h3>Setting</h3>
                            <ul class="us-links">
                                <li><a href="profile-account-setting.html" title="">Account Setting</a></li>
                                <li><a href="#" title="">Privacy</a></li>
                                <li><a href="#" title="">Faqs</a></li>
                                <li><a href="#" title="">Terms & Conditions</a></li>
                            </ul>
                            <h3 class="tc"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a></h3>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div><!--user-account-settingss end-->
                    </div>
                </div><!--header-data end-->
                @endguest
            </div>
        </header><!--header end-->
        </div>
            @yield('content')
    </div>
