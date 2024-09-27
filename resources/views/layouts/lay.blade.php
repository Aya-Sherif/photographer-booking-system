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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
                            <img src="{{ asset('front/logo/logo.png') }}" alt="" style="height: 70px">
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
                        {{-- <button class="button-53" role="button">Button 53</button> --}}


                    </nav>


                    <div id="mobile-menu-wrap">
                        <div class="right-btn "><a href="https://appt.link/meet-with-ahmed-fareed-Ym3lA87Y"
                            class="primary-btn">Book NOW</a>

                    </div>
                    </div>
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
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="fs-widget">
                            <h5>About the photographer</h5>
                        </div>
                        <p>Ahmed Fareed (b.2002) is an award-winning travel photographer from Giza, Egypt.
                            He has been awarded 1st place at the international youth photocontest (NoFrames), and other contests including international and local contests. </p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>My Accounts</h5>
                        <div class="fw-social">
                            <div class="fa-social">
                                <a href="https://www.facebook.com/ahmadafareed"><i class="fa fa-facebook " style="font-size: 2rem; margin-right: 1rem;"></i></a>
                                <a><i class="fa fa-gmail" style="font-size: 2rem; margin-right: 1rem;"> </i></a>
                                <a href="https://wa.me/+201280021316" target="_blank">
                                    <i class="fa fa-whatsapp" style="font-size: 2rem; margin-right: 1rem;"></i>
                                </a>
                                                                <a><i class="fa fa-gmail" style="font-size: 2rem; margin-right: 1rem;"> </i></a>
                                <a href="https://www.instagram.com/fareedph?igsh=MXQ2aG5oaTRpeDZlcQ=="><i class="fa fa-instagram" style="font-size: 2rem; margin-right: 1rem;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            {{-- <li><a href="#">Contact</a></li> --}}
                        </ul>
                        <ul>
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ route('project') }}">Project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8 col-sm-8">
                    <div class="fs-widget">
                        <h5>Book an Appointemnt</h5>
                        {{-- <p>Imolor amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> --}}
                        {{-- <form action="#"> --}}
                        <div class="center-btn "><a href="https://appt.link/meet-with-ahmed-fareed-Ym3lA87Y"
                                class="primary-btn">BOOK NOW</a></div>
                        {{-- <button class="btn btn-primary" type="button">Button</button> --}}



                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
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
