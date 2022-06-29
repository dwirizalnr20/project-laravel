<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home || Manajemen Aset</title>
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
                    <li><a class="nav-link scrollto active" href="/dashboard">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto mb-2 mt-2" href="#services">Bidang</a></li>
                    <li class="dropdown"><a href="#"><span>Barang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/software">Software</a></li>
                            <li><a href="/hardware">Hardware</a></li>
                            <li><a href="/sdm">SDM</a></li>
                        </ul>
                    </li>

                    <ul class="nav-item">
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ms-3" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hai , {{auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li><a class="nav-link scrollto ms-5" href="/login"><i class="bi bi-box-arrow-right"></i>Login</a></li>
                        @endauth

                        <!-- <li><a class="nav-link scrollto ms-2" href="/register">Register</a></li> -->
                    </ul>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End #header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>Selamat Datang Di Website Manajemen Aset</h1>
            <a href="#about" class="btn-get-started scrollto mt-3">Get Started</a>
        </div>
    </section><!-- #hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="container">
                    <div class="row">
                        <p class="text-center">
                            Website Manajemen Aset adalah website yang berfungsi untuk mendata berbagai barang ataupun aplikasi yang ada di Dinas Komunikasi dan Informatika Provinsi Jawa Timur.
                        </p>
                    </div>
                </div>
            </div>

        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Bidang Di Dalam Dinas Komunikasi Dan Informatika Jawa Timur</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h4 class="title"><a href="">Sekretariat</a></h4>
                        <p class="description">Sekretaris mempunyai tugas merencanakan, melaksanakan, mengkoordinasikan dan mengendalikan kegiatan administrasi umum, kepegawaian, perlengkapan, penyusunan program, keuangan, humas dan protokol.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-info-circle"></i></div>
                        <h4 class="title"><a href="">Bidang Informasi Publik</a></h4>
                        <p class="description">Merumuskan serta menyiapkan bahan pelaksanaan kebijakan layanan informasi publik, pengelolaan informasi publik dan media publik.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-headset"></i></div>
                        <h4 class="title"><a href="">Bidang Komunikasi Publik</a></h4>
                        <p class="description">menyiapkan bahan penyusunan dan menyiapkan bahan pelaksanaan kebijakan pengelolaan opini publik, sumberdaya komunikasi publik dan kemitraan komunikasi publik.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-pc-display-horizontal"></i></div>
                        <h4 class="title"><a href="">Bidang Aplikasi dan Informatika</a></h4>
                        <p class="description">merencanakan, menyiapkan bahan pelaksanaan dan mengkoordinasikan e-Government dan pemberdayaan Teknologi Informasi dan Komunikasi (TIK), Pengembangan Aplikasi serta Persandian dan Keamanan Informasi.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-gear"></i></div>
                        <h4 class="title"><a href="">Bidang Infrastruktur Teknologi Informasi dan Komunikasi</a></h4>
                        <p class="description">Merencanakan, menyiapkan bahan pelaksanaan dan mengkoordinasikan infrastruktur pemberdayaan TIK, pemeliharaan infrastruktur pemberdayaan TIK dan pengendalian infrastruktur pemberdayaan TIK.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-bar-chart-line-fill"></i></div>
                        <h4 class="title"><a href="">Bidang Pengelolaan Data dan Statistik</a></h4>
                        <p class="description">Merencanakan, menyiapkan bahan pelaksanaan dan mengkoordinasikan Pengelolaan Data, Statistik, Evaluasi dan Informasi.</p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
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