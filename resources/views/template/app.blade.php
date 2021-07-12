<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from synchrotheme.com/theme/taso/particle.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2021 15:42:52 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Personal, Portfolio, Creative,Design,mordan">
    <!-- <meta name="description" content="Taso"> -->
    <meta name="author" content="cosmos-themes">

    <title>Tasniya: Graphic Designer & Website Developer</title>

    <!-- favicon -->
    <link href="#" rel="icon" type="image/png">

    <!--Font Awesome css-->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.css') }}">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">

    <!--Owl Carousel css-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!--Magnific Popup css-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900%7cOpen+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!--Site Main Style css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body oncontextmenu="return false;">

    <div class="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav id="home" class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="{{ route('index') }}">
                    Taso
                </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <!--Nav Links-->
                    <li class="nav-item">
                        <a href="#" class="nav-link active" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-scroll-nav="1">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-scroll-nav="2">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-scroll-nav="3">Works</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" data-scroll-nav="5">Contact</a>
                    </li>
                    @if (session()->has('id'))
                        <li class="nav-item">
                            <a href="{{ route('view-create-project') }}" class="nav-link">Manage Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                        </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar End-->

    <!--Home Section Start-->
    <section id="Particle-ground" class="banner" style="" data-stellar-background-ratio=".7" data-scroll-index="0">
        <div class="container">
            <!--Banner Content-->
    
            <div class="banner-div">
                <h1>HI! I'M <span>TASNIYA</span></h1>
                <p class="cd-headline clip is-full-width">
                    <span>Professional In</span>
                    <span class="cd-words-wrapper">
                                    <b class="is-visible">Graphics Designing</b>
                                    <b>Website Designing.</b> 
                                    <b>Website Devloping.</b>
                                    
                                    <b>WordPress.</b>
                                </span>
                </p>
                <!--About Social Icons-->
                <div class="social-icons mt-15">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="arrow bounce">
                <a class="fa fa-chevron-down fa-2x" href="#" data-scroll-nav="1"></a>
            </div>
        </div>
    </section>
    <!--Home Section End-->

    @yield('content')

    <footer class="pt-30 pb-30">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="copy pt-30">
                        Taso &copy; 2018. All Right Reserved, Synchronise IT.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <!--Jquery js-->
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--Stellar js-->
    <script src="{{ asset('assets/js/jquery.stellar.js') }}"></script>
    <!--Animated Headline js-->
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <!--Owl Carousel js-->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!--ScrollIt js-->
    <script src="{{ asset('assets/js/scrollIt.min.js') }}"></script>
    <!--Isotope js-->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!--Particle js-->
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/particle-main.js') }}"></script>
    <!--Magnific Popup js-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!--Site Main js-->
    {{-- <script src="{{ asset('assets/js/contact.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('js')
</body>

<!-- Mirrored from synchrotheme.com/theme/taso/particle.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2021 15:43:09 GMT -->

</html>