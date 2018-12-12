<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/Sistem-Absensi-QR-Code/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/Sistem-Absensi-QR-Code/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/Sistem-Absensi-QR-Code/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/Sistem-Absensi-QR-Code/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/Sistem-Absensi-QR-Code/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-indigo">
    <?php 
        session_start();
        $id_dosen = $_SESSION['username'];
    ?>
    <div class="page-loader-wrapper">
    <!-- Page Loader -->
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
   
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/Sistem-Absensi-QR-Code/index.html">SISTEM ABSENSI</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/Sistem-Absensi-QR-Code/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $id_dosen ?></div>
                    <!-- <div class="email">john.doe@example.com</div> -->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/Sistem-Absensi-QR-Code/index_dosen.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Sistem-Absensi-QR-Code/aktifasi_kelas.php">
                            <i class="material-icons">home</i>
                            <span>Aktifasi Kelas</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <!-- No Header Card -->
            <div class="block-header">
                <h2>MENU</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <a href="/Sistem-Absensi-QR-Code/aktifasi_kelas.php">
                        <div class="body bg-red">
                            <h4 align="center">AKTIFASI KELAS</h4>
                        </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- #END# No Header Card -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/node-waves/waves.js"></script>

    <!-- Wait Me Plugin Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/waitme/waitMe.js"></script>

    <!-- Custom Js -->
    <script src="/Sistem-Absensi-QR-Code/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="/Sistem-Absensi-QR-Code/js/demo.js"></script>
</body>
</html>