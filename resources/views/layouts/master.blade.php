<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dunia Cerita</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('duniacerita/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('duniacerita/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('duniacerita/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('duniacerita/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('duniacerita/vendor/aos/aos.css') }}" rel="stylesheet" type="text/css" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('duniacerita/css/main.css') }}" rel="stylesheet" type="text/css" />

    @stack('styles')
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center  me-auto me-lg-0">
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <i class="bi bi-book" style="color:#FFFFFF"></i>
                <h1>Dunia Cerita</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('home.index') }}" class="active">Home</a></li>
                    {{-- <li><a href="about.html">About</a></li> --}}
                    <li class="dropdown"><a href="#"><span>Genre</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">People</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Animals</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Travel</a></li>
                            {{-- <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Sub Menu 1</a></li>
                                    <li><a href="#">Sub Menu 2</a></li>
                                    <li><a href="#">Sub Menu 3</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </li>
                    <li><a href="{{ route('service.index') }}">Services</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                </ul>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->

    <!-- #main -->
    @yield('content')
    <!-- End Main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy; 2023 <strong><span>Dunia Cerita</span></strong>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader">
      <div class="line"></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('duniacerita/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('duniacerita/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('duniacerita/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('duniacerita/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('duniacerita/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('duniacerita/js/main.js') }}"></script>

</body>

</html>
