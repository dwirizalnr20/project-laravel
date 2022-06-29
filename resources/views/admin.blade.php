<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel - KOMINFO</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="admin/images/icon/favicon.ico">
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/css/themify-icons.css">
    <link rel="stylesheet" href="admin/css/metisMenu.css">
    <link rel="stylesheet" href="admin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/css/slicknav.min.css">
    <link rel="stylesheet" href="admin/css/typography.css">
    <link rel="stylesheet" href="admin/css/default.css">
    <link rel="stylesheet" href="admin/css/styles.css">
    <link rel="stylesheet" href="admin/css/responsive.css" modernizr css -->
    <script src="/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->

        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                            <li>
                                <a href="/redirects"><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Aset
                                    </span></a>
                                <ul class="collapse">
                                    @if (auth()->user()->role == '2')
                                    <li><a href="/hardwareadm">Hardware</a></li>
                                    @endif

                                    @if (auth()->user()->role == '3')
                                    <li><a href="/softwareadm">Software</a></li>
                                    @endif

                                    @if (auth()->user()->role == '4')
                                    <li><a href="/sdmadm">SDM</a></li>
                                    @endif
                                </ul>
                            </li>
                            @if (auth()->user()->role == '1')
                            <li><a href="/user"><i class="ti-user"></i><span>Kelola user</span></a></li>
                            <li><a href="/kategori"><i class="ti-list"></i><span>Kelola Kategori</span></a></li>
                            @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="btn btn-outline-light btn-sm"><span>Logout</span></button>
                                </form>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <header id="header" class="fixed-top d-flex align-items-center">
                            <div class="container d-flex align-items-center">
                                <nav id="navbar" class="navbar">
                                </nav>
                            </div>
                    </div>
                    </header>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li>
                                <h3>
                                    <div class="date">
                                        <script type='text/javascript'>
                                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                            var date = new Date();
                                            var day = date.getDate();
                                            var month = date.getMonth();
                                            var thisDay = date.getDay(),
                                                thisDay = myDays[thisDay];
                                            var yy = date.getYear();
                                            var year = (yy < 1000) ? yy + 1900 : yy;
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                            //
                                        </script></b>
                                    </div>
                                </h3>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- header area end -->

            <!-- page title area end -->

            <div class="main-content-inner">
                <div class="sales-report-area mt-5 mb-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">User</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1>{{$jumlah_user}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">

                                        <h4 class="header-title mb-0">Aset</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1>{{$jumlah_aset}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-list"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Kategori</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1>{{$jumlah_kate}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row area start-->
                    </div>
                </div>
                <!-- main content area end -->

            </div>
            <div class="card text-center">
                @auth
                <div class="card-header mb-3">
                    <h5> Hai , {{auth()->user()->name}} </h5>
                </div>
                <div class="card-body">
                    <h3 class="card-title mt-5">SELAMAT DATANG</h3>
                    <p class="card-text">Pada halaman admin, Anda dapat menambah kategori barang, mengelola barang,
                        mengelola user dan admin</p>
                    <br><br>
                </div>
                <div class="card-footer text-muted">
                    Dinas Komunikasi Dan Informatika Provinsi Jawa Timur
                </div>
            </div>
            @endauth
        </div>
        <h6 class="text-center mt-4">@Copyright 2022</h6>
    </div>
    </div>
    </div>
    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="admin/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/owl.carousel.min.js"></script>
    <script src="admin/js/metisMenu.min.js"></script>
    <script src="admin/js/jquery.slimscroll.min.js"></script>
    <script src="admin/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="admin/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="admin/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="admin/js/plugins.js"></script>
    <script src="admin/js/scripts.js"></script>
</body>

</html>