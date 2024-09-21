<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ahmed Fareed</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('front/img/logo.png') }}" alt="" style="height: 70px">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            {{-- <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('pricing') }}">Pricing</a></li> --}}
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ route('project') }}">Project</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            {{-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('portfolio-details') }}">Portfolio Details</a></li>
                                     <li><a href="{{ route('project-details/1') }}">Project Details</a></li>
                                </ul>
                            </li> --}}
                        </ul>

                    </nav>

                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer-section">

    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    {{-- <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div> --}}
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('front') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('front') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('front') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('front') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('front') }}/js/masonry.pkgd.min.js"></script>
    <script src="{{ asset('front') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('front') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('front') }}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</body>

</html>
