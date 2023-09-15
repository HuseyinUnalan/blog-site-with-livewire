<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}">

    <!-- CSS
   ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <span title="Light Mode">Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <span title="Dark Mode">Dark</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Start Header -->
    <header class="header axil-header  header-light header-sticky ">
        <div class="header-wrap">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12">
                    <div class="logo">
                        <a href="index.html">
                            <img class="dark-logo" src="{{ asset('frontend/assets/images/logo/logo-black.png') }}"
                                alt="Blogar logo">
                            <img class="light-logo" src="{{ asset('frontend/assets/images/logo/logo-white2.png') }}"
                                alt="Blogar logo">
                        </a>
                    </div>
                </div>

                <div class="col-xl-6 d-none d-xl-block">
                    <div class="mainmenu-wrapper">
                        <nav class="mainmenu-nav">

                            <!-- Start Mainmanu Nav -->
                            <ul class="mainmenu">

                                <li class="menu-item-has-children">
                                    <a href="{{ route('index') }}">
                                        Anasayfa
                                    </a>
                                </li>


                                <li class="menu-item-has-children">
                                    <a href="{{ route('add.blog') }}">
                                        Blog Ekle
                                    </a>
                                </li>



                        </nav>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                    <div class="header-search text-end d-flex align-items-center">
                        <form class="header-search-form d-sm-block d-none">
                            <div class="axil-search form-group">
                                <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                        <div class="mobile-search-wrapper d-sm-none d-block">
                            <button class="search-button-toggle"><i class="fal fa-search"></i></button>
                            <form class="header-search-form">
                                <div class="axil-search form-group">
                                    <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <ul class="metabar-block">
                            <li class="icon"><a href="#"><i class="fas fa-bookmark"></i></a></li>
                            <li class="icon"><a href="#"><i class="fas fa-bell"></i></a></li>
                            @auth
                                <li>
                                    <a href="#">
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                            @else
                            @endauth

                        </ul>
                        <!-- Start Hamburger Menu  -->
                        <div class="hamburger-menu d-block d-xl-none">
                            <div class="hamburger-inner">
                                <div class="icon"><i class="fal fa-bars"></i></div>
                            </div>
                        </div>
                        <!-- End Hamburger Menu  -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Start Header -->

    <!-- Start Mobile Menu Area  -->
    <div class="popup-mobilemenu-area">
        <div class="inner">
            <div class="mobile-menu-top">
                <div class="logo">
                    <a href="index.html">
                        <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Logo Images">
                        <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Logo Images">
                    </a>
                </div>
                <div class="mobile-close">
                    <div class="icon">
                        <i class="fal fa-times"></i>
                    </div>
                </div>
            </div>
            <ul class="mainmenu">
                <li class="menu-item-has-children"><a href="#">Home</a>
                    <ul class="axil-submenu">
                        <li><a href="index.html">Home Default</a></li>
                        <li><a href="home-creative-blog.html">Home Creative Blog</a></li>
                        <li><a href="home-seo-blog.html">Home Seo Blog</a></li>
                        <li><a href="home-tech-blog.html">Home Tech Blog</a></li>
                        <li><a href="home-lifestyle-blog.html">Home Lifestyle Blog</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Categories</a>
                    <ul class="axil-submenu">
                        <li><a href="post-details.html">Accessibility</a></li>
                        <li><a href="post-details.html">Android Dev</a></li>
                        <li><a href="post-details.html">Accessibility</a></li>
                        <li><a href="post-details.html">Android Dev</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Post Format</a>
                    <ul class="axil-submenu">
                        <li><a href="post-format-standard.html">Post Format Standard</a></li>
                        <li><a href="post-format-video.html">Post Format Video</a></li>
                        <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                        <li><a href="post-format-text.html">Post Format Text Only</a></li>
                        <li><a href="post-layout-1.html">Post Layout One</a></li>
                        <li><a href="post-layout-2.html">Post Layout Two</a></li>
                        <li><a href="post-layout-3.html">Post Layout Three</a></li>
                        <li><a href="post-layout-4.html">Post Layout Four</a></li>
                        <li><a href="post-layout-5.html">Post Layout Five</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="axil-submenu">
                        <li><a href="post-list.html">Post List</a></li>
                        <li><a href="archive.html">Post Archive</a></li>
                        <li><a href="author.html">Author Page</a></li>
                        <li><a href="about.html">About Page</a></li>
                        <li><a href="maintenance.html">Maintenance</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </li>
                <li><a href="404.html">404 Page</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
            <div class="buy-now-btn">
                <a href="#">Buy Now <span class="badge">$15</span></a>
            </div>
        </div>
    </div>
    <!-- End Mobile Menu Area  -->
    {{ $slot }}

    <!-- Start Footer Area  -->
    <div class="axil-footer-area axil-footer-style-1 footer-variation-2">
        <div class="footer-mainmenu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h2 class="title">World</h2>
                            <div class="inner">
                                <ul class="ft-menu-list">
                                    <li><a href="#">U.N.</a></li>
                                    <li><a href="#">Conflicts</a></li>
                                    <li><a href="#">Terrorism</a></li>
                                    <li><a href="#">Disasters</a></li>
                                    <li><a href="#">Global Economy</a></li>
                                    <li><a href="#">Environment</a></li>
                                    <li><a href="#">Religion</a></li>
                                    <li><a href="#">Scandals</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h2 class="title">Politics</h2>
                            <div class="inner">
                                <ul class="ft-menu-list">
                                    <li><a href="#">Executive</a></li>
                                    <li><a href="#">Senate</a></li>
                                    <li><a href="#">House</a></li>
                                    <li><a href="#">Judiciary</a></li>
                                    <li><a href="#">Global Economy</a></li>
                                    <li><a href="#">Foreign policy</a></li>
                                    <li><a href="#">Polls</a></li>
                                    <li><a href="#">Elections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h2 class="title">Entertainment</h2>
                            <div class="inner">
                                <ul class="ft-menu-list">
                                    <li><a href="#">Celebrity News</a></li>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">TV News</a></li>
                                    <li><a href="#">Disasters</a></li>
                                    <li><a href="#">Music News</a></li>
                                    <li><a href="#">Environment</a></li>
                                    <li><a href="#">Style News</a></li>
                                    <li><a href="#">Entertainment Video</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h2 class="title">Business</h2>
                            <div class="inner">
                                <ul class="ft-menu-list">
                                    <li><a href="#">Environment</a></li>
                                    <li><a href="#">Conflicts</a></li>
                                    <li><a href="#">Terrorism</a></li>
                                    <li><a href="#">Disasters</a></li>
                                    <li><a href="#">Global Economy</a></li>
                                    <li><a href="#">Environment</a></li>
                                    <li><a href="#">Religion</a></li>
                                    <li><a href="#">Scandals</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h2 class="title">Health</h2>
                            <div class="inner">
                                <ul class="ft-menu-list">
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">Conflicts</a></li>
                                    <li><a href="#">Terrorism</a></li>
                                    <li><a href="#">Disasters</a></li>
                                    <li><a href="#">Global Economy</a></li>
                                    <li><a href="#">Environment</a></li>
                                    <li><a href="#">Religion</a></li>
                                    <li><a href="#">Scandals</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h2 class="title">About</h2>
                            <div class="inner">
                                <ul class="ft-menu-list">
                                    <li><a href="#">U.N.</a></li>
                                    <li><a href="#">Conflicts</a></li>
                                    <li><a href="#">Terrorism</a></li>
                                    <li><a href="#">Disasters</a></li>
                                    <li><a href="#">Global Economy</a></li>
                                    <li><a href="#">Environment</a></li>
                                    <li><a href="#">Religion</a></li>
                                    <li><a href="#">Scandals</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Footer Top Area  -->
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index.html">
                                <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Logo Images">
                                <img class="white-logo" src="assets/images/logo/logo-white2.png" alt="Logo Images">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                        <!-- Start Post List  -->
                        <div
                            class="d-flex justify-content-start mt_sm--15 justify-content-md-end align-items-center flex-wrap">
                            <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                            <ul class="social-icon color-tertiary md-size justify-content-start">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Post List  -->
                    </div>

                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->

        <!-- Start Copyright Area  -->
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-8">
                        <div class="copyright-left">
                            <ul class="mainmenu justify-content-start">
                                <li>
                                    <a class="hover-flip-item-wrapper" href="#">
                                        <span class="hover-flip-item">
                                            <span data-text="Contact Us">Contact Us</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="hover-flip-item-wrapper" href="#">
                                        <span class="hover-flip-item">
                                            <span data-text="Terms of Use">Terms of Use</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="hover-flip-item-wrapper" href="#">
                                        <span class="hover-flip-item">
                                            <span data-text="AdChoices">AdChoices</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="hover-flip-item-wrapper" href="#">
                                        <span class="hover-flip-item">
                                            <span data-text="Advertise with Us">Advertise with Us</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="hover-flip-item-wrapper" href="#">
                                        <span class="hover-flip-item">
                                            <span data-text="Blogar Store">Blogar Store</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="copyright-right text-start text-md-end mt_sm--20">
                            <p class="b3">All Rights Reserved © 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </div>
    <!-- End Footer Area  -->

    <!-- Start Back To Top  -->
    <a id="backto-top"></a>
    <!-- End Back To Top  -->
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/ssets/js/vendor/tweenmax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.style.switcher.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
