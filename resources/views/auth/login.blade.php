<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo-jatim.png" rel="icon">
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style2.css" rel="stylesheet">

</head>

<body>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><img src="assets/img/logo.png" class="img-fluid" alt=""></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>

    <div class="breadcrumbs mt-1">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="/login"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Halaman Login</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- login -->
    <div class="login">
        <div class="container">

            <h2 class="text-center">Silahkan Login</h2>

            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Masukan Email" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Masukan Password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <x-jet-button class="btn btn-dark">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
            <h4>Belum terdaftar ?</h4>
            <p><a href="/register">Daftar Sekarang</a></p>
        </div>
    </div>

    <footer id="footer">
        <div class="container mt-6">
            <section id="contact" class="contact section-bg">
                <div class="row">
                    <div class="contact-about text-center">
                        <h3>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</h3>
                        <h4>Jl. A. Yani 242 - 244, Gayungan, Surabaya, Jawa Timur</h3>
                            <h4>Telp (031) 8294608 / Fax (031) 8294517</h3>
                                <div class="social-links">
                                    <a href="https://twitter.com/KominfoJatim" target="_blank" class="twitter mt-3"><i class="bi bi-twitter"></i></a>
                                    <a href="https://www.youtube.com/channel/UCEe1ees-scoEkTQv3he9PJw" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                                    <a href="https://www.instagram.com/kominfojatim/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                                </div>
                    </div>

            </section>
            <div class="copyright">
                &copy; 2022 <strong><span>Dinas Komunikasi dan Informatika Provinsi Jawa Timur</span></strong>
            </div>
            <div class="credits">
                Pemerintah Provinsi Jawa Timur
            </div>
        </div>
    </footer><!-- End #footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>