<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aset Hardware || MANAJEMEN ASET KOMINFO</title>
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
          <!-- <li><a class="nav-link scrollto" href="/">About</a>
        </li>
          <li><a class="nav-link scrollto mb-2 mt-2" href="/">Bidang</a></li> -->
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hai User, {{auth()->user()->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
            <li><a class="nav-link scrollto ms-5" href="/login"><i class="bi bi-box-arrow-right"></i>Login</a></li>
            @endauth

            <!-- <li><a class="nav-link scrollto ms-2" href="/register">Register</a></li> -->
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End #header -->

  <br> <br> <br> <br> <br>
  <div class="container">
    <div class="btn-group ms-7 btn-lg" role="group" aria-label="Basic outlined example">

      <a href="/software " type="button" class="btn btn-outline-primary">Software</a>
      <a href="#hardware" type="button" class="btn btn-outline-primary">Hardware</a>
      <a href="/sdm" type="button" class="btn btn-outline-primary">SDM</a>

    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5 mt-3">
      @foreach($data as $dt)
      <div class="col">
        <div class="card">

          <img src="{{$dt->gambar}}" class="card-img-top" alt="...">
          <div class="card-body">

            <h5 class="card-title">{{$dt->nama_item}}</h5>
            <h6 class="card-text">{{$dt->keterangan}}</h6>
            <h6 class="card-text">Pemegang : {{$dt->pemegang}}</h6>

          </div>

        </div>

      </div>
      @endforeach

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