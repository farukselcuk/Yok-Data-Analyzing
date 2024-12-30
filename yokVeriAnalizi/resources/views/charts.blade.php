<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>YÖK Veri Analizi</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/logomuz2.png">
    <!-- Custom CSS -->
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">

                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.blade.php">
                        <!-- Logo icon -->
                        <b class="logomuz2.png ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logomuz2.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../../assets/images/logoyazi.svg" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logomuz2.png"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i
                                                            class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i
                                                            class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i
                                                            class="fa fa-link"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings me-1 ms-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white">View Profile</a></div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                               href="{{ url('/index') }}" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Kontrol Paneli</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                               href="{{ url('/charts') }}" aria-expanded="false">
                                <i class="mdi mdi-chart-bar"></i>
                                <span class="hide-menu">Cizelgeler</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                               href="{{ url('/widgets') }}" aria-expanded="false">
                                <i class="mdi mdi-chart-bubble"></i>
                                <span class="hide-menu">Yeni Güncellemeler</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                               href="{{ url('/universites') }}" aria-expanded="false">
                                <i class="mdi mdi-border-inside"></i>
                                <span class="hide-menu">Tablolar</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                               href="{{ url('/pages-gallery') }}" aria-expanded="false">
                                <i class="mdi mdi-multiplication-box"></i>
                                <span class="hide-menu">Galeri</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>


        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Charts</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Chart-1 -->
                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Anlık Site Ziyaretici</h5>
                                                <div id="real-time" style="height:400px;"></div>
                                                <p>Güncellemeler arasındaki süre:
                                                    <input id="updateInterval" type="text" value=""
                                                        style="text-align: right; width:5em"> milisaniye
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                      </div>
                <!-- ENd chart-1 -->
                <!-- Chart-2 -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Bölüm puanları grafiği</h5>
                                <div id="placeholder" style="height: 400px;"></div>
                                <p id="choices" class="mt-3"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Chart-2 -->
                <!-- Cards -->

                <!-- End cards -->

                <!-- End chart-3 -->
                <!-- Üniversite Türü Dağılımı Grafiği -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Üniversite Türü Dağılımı (2022-2024)</h5>
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="university-type-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End chart-4 -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <select class="form-select" id="universiteSelect" name="universite">
                            <option value="" disabled selected>Üniversite Seçiniz</option>
                            @foreach($universiteler as $universite)
                                <option value="{{ $universite->universite_adi }}">{{ $universite->universite_adi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left text-center mt-3">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 border-left text-center pt-2">
                                    <h3 class="mb-0 fw-bold" id="mevcutSayi">0</h3>
                                    <span class="text-muted">Mevcut Öğrenci Sayısı</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left text-center mt-3">
                                        <i class="fas fa-dumbbell fa-2x text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 border-left text-center pt-2">
                                    <h3 class="mb-0 fw-bold">0</h3>
                                    <span class="text-muted">Spor Salonu Sayısı</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left text-center mt-3">
                                        <i class="fas fa-flask fa-2x text-success"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 border-left text-center pt-2">
                                    <h3 class="mb-0">0</h3>
                                    <span class="text-muted">Laboratuar Sayısı</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left text-center mt-3">
                                        <i class="fas fa-ruler-combined fa-2x text-info"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 border-left text-center pt-2">
                                    <h3 class="mb-0 fw-bold">0</h3>
                                    <span class="text-muted">Yüz Ölçümü</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Charts -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Bölüm Türü Dağılımı</h5>
                                <canvas id="pieChart" style="height: 400px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Yıllara Göre Bölüm Sayısı</h5>
                                <canvas id="barChart" style="height: 400px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Charts -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/libs/chart/matrix.interface.js"></script>
    <script src="../../assets/libs/chart/excanvas.min.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/chart/jquery.peity.min.js"></script>
    <script src="../../assets/libs/chart/matrix.charts.js"></script>
    <script src="../../assets/libs/chart/jquery.flot.pie.min.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../assets/libs/chart/turning-series.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Global değişkenler
        let pieChart = null;
        let barChart = null;

        $(document).ready(function() {
            $('#universiteSelect').change(function() {
                var universiteId = $(this).val();
                console.log('Seçilen üniversite:', universiteId);

                var encodedId = encodeURIComponent(universiteId);

                $.ajax({
                    url: '/get-universite-data/' + encodedId,
                    type: 'GET',
                    success: function(response) {
                        console.log('AJAX yanıtı:', response);

                        // Mevcut öğrenci sayısı
                        $('#mevcutSayi').text(response.mevcut_sayi || '0');

                        // Spor salonu sayısı - düzeltilmiş seçici
                        $('.row .col-md-6:nth-child(2) .card .row .col-md-6:last-child h3').text(response.spor_salonu_sayisi || '0');

                        // Laboratuvar sayısı - düzeltilmiş seçici
                        $('.row .col-md-6:nth-child(3) .card .row .col-md-6:last-child h3').text(response.laboratuvar_sayisi || '0');

                        // Yüz ölçümü - düzeltilmiş seçici
                        $('.row .col-md-6:nth-child(4) .card .row .col-md-6:last-child h3').text(response.yuz_olcumu || '0');

                        // Pasta grafiğini güncelle
                        updatePieChart(response.bolum_dagilimi);

                        // Kontenjan grafiğini güncelle
                        updateBarChart(response.kontenjan_verileri);
                    },
                    error: function(error) {
                        console.error('Veri getirme hatası:', error);
                        console.error('Hata detayı:', error.responseJSON);
                    }
                });
            });
        });

        // Pasta grafiğini güncelleme fonksiyonu
        function updatePieChart(data) {
            const ctx = document.getElementById('pieChart').getContext('2d');

            // Eğer önceki grafik varsa yok et
            if (pieChart !== null) {
                pieChart.destroy();
            }

            // Yeni grafiği oluştur
            pieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Bölüm Türü Dağılımı'
                        }
                    }
                }
            });
        }

        // Kontenjan grafiğini güncelleme fonksiyonu
        function updateBarChart(data) {
            console.log('Bar chart verileri:', data); // Debug için ekledik

            const ctx = document.getElementById('barChart').getContext('2d');

            if (barChart !== null) {
                barChart.destroy();
            }

            barChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Bölüm Sayısı'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        },
                        title: {
                            display: true,
                            text: 'Yıllara Göre Bölüm Sayısı'
                        }
                    }
                }
            });
        }

        // Üniversite Türü Dağılımı için AJAX çağrısı
        function loadUniversityTypeData() {
            $.ajax({
                url: '/get-university-types',
                type: 'GET',
                success: function(response) {
                    console.log('Üniversite türü verileri:', response); // Debug için
                    initUniversityTypeChart(response);
                },
                error: function(error) {
                    console.error('Veri getirme hatası:', error);
                }
            });
        }

        // Üniversite Türü Grafiği
        function initUniversityTypeChart(chartData) {
            var typeData = [
                {
                    label: "Devlet",
                    data: chartData.devlet || [],
                    color: "#00c292",
                    lines: { show: true },
                    points: { show: true }
                },
                {
                    label: "Vakıf",
                    data: chartData.vakif || [],
                    color: "#fb9678",
                    lines: { show: true },
                    points: { show: true }
                },
                {
                    label: "KKTC",
                    data: chartData.kktc || [],
                    color: "#03a9f3",
                    lines: { show: true },
                    points: { show: true }
                }
            ];

            var typeOptions = {
                series: {
                    lines: {
                        show: true,
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        radius: 4
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    borderColor: "#ddd",
                    borderWidth: 1,
                    labelMargin: 10,
                    backgroundColor: "#fff"
                },
                legend: {
                    position: "ne",
                    margin: [0, -24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                    labelFormatter: function(label, series) {
                        return label + ' Üniversiteleri &nbsp;&nbsp;';
                    }
                },
                xaxis: {
                    ticks: [[2022, "2022"], [2023, "2023"], [2024, "2024"]],
                    tickLength: 0
                },
                yaxis: {
                    min: 0,
                    tickSize: 25
                },
                tooltip: true,
                tooltipOpts: {
                    content: "%s: %y üniversite",
                    shifts: {
                        x: -60,
                        y: 25
                    }
                }
            };

            // Grafik çizimi öncesi konsola veri kontrolü
            console.log('Grafik verileri:', typeData);
            console.log('Grafik ayarları:', typeOptions);

            $.plot("#university-type-chart", typeData, typeOptions);
        }

        // Sayfa yüklendiğinde grafiği başlat
        $(document).ready(function() {
            loadUniversityTypeData();
        });
    </script>

</body>

</html>
