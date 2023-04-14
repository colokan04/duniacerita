<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dunia Cerita Sign In</title>
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

    <!-- ======= Header ======= f10871-->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center  me-auto me-lg-0">
                <i class="bi bi-book" style="color:#000000"></i>
                <h1 style="font-family: 'Brush Script MT', cursive; font-size: 40px; font-style: normal; font-variant: normal;
                font-weight: 700; line-height: 26.4px;">Dunia Cerita</h1>
            </a>

            <div class="header-social-links">
                <a href="https://twitter.com" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://id.linkedin.com" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->

    <!-- #main -->
    <main id="main" data-aos="fade" data-aos-delay="10">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center" style="justify-content: left!important;">
                    <div class="col-lg-5 text-center">

                        <div class="row justify-content-right" style="margin-top: 40px">
                            <div class="col-xl-12 col-lg-12">

                                <form method="POST" action="{{ route('login.custom') }}">

                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-12" style="text-align: left;">
                                            {{-- <label for="email" class="col-md-3 col-form-label">{{ __('Nama User') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror --}}

                                            <label for="email" class="col-md-3 col-form-label">{{ __('Nama User') }}</label>
                                            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                                autofocus>
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-12" style="text-align: left;">
                                            <label for="email" class="col-md-3 col-form-label">{{ __('Kata Sandi') }}</label>
                                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                            {{-- <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">
                                                @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror --}}
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Ingatkan Saya') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">&nbsp;</div>
                                        <div class="col-md-5 col-form-label text-md-end" style="margin-top: -15px;">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Lupa Kata Sandi?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-2" style="margin-top: -15px;">
                                        <div class="col-md-4">&nbsp;</div>
                                        <div class="col-md-3">&nbsp;</div>
                                        <div class="col-md-5 col-form-label text-md-end">
                                            <button type="submit" class="btn btn-primary btn-custom-sm">
                                                {{ __('Masuk') }}
                                           </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

    </main>
    <!-- End Main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright" style="color: #000000;">
                Copyright &copy; 2023 <strong><span>Dunia Cerita</span></strong>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    {{-- <div id="preloader">
      <div class="line"></div>
    </div> --}}

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
