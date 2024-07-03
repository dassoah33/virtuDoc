
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>Virtu Doc | Tableau de bord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Virtu Bank." name="description" />
    <meta content="Dassoah Maixent" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);

        h1, h2 {
            font-family: 'Poppins', sans-serif !important;
        }

        .text-estiam{
            color: #1976d2;
        }

        .navbar-nav {
            height: 85vh !important;
        }

        .nav-item.menu-active,
        .nav-item:not(.menu-active):hover {
            background: #6a1b9a !important;
            color: #fff;
            font-weight: 700;
        }

        .nav-item:not(.menu-active) {
            color: #4B4B4B;
            background: #FCFCFC !important;
            font-weight: normal;
        }
    </style>
</head>
<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div style="z-index: 2; position: fixed; width: 250px; height: 100%; background: #FCFCFC;">
            <div class="logo-box py-5">
                <a href="#">
                    <h1 class="fw-bold">Virtu Doc</h1>
                </a>
            </div>

            <!--- Menu -->
            <div>
                <ul class="navbar-nav d-flex flex-column">
                    <li class="nav-item menu-active ps-4 py-2">
                        <a class='nav-link' href="{{ route('dashboard') }}">
                            <i class="fas fa-home fa-lg me-2"></i>
                            <span class="fs-5">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item ps-4 py-2">
                        <a class='nav-link' href={{ route('logs') }}>
                            <i class="fas fa-file-alt fa-lg me-2"></i>
                            <span class="fs-5">Logs des connexions</span>
                        </a>
                    </li>
                    
                    <li class="nav-item mt-auto ps-4 py-2">
                        <a class='nav-link' href="#">
                            <i class="fas fa-power-off fa-lg me-2"></i>
                            <span class="fs-5">Se déconnecter</span>
                        </a>
                    </li>
                    
                    <li class="nav-item ps-4 py-2">
                        <a class='nav-link' href="#">
                            <i class="fas fa-circle-user fa-lg me-2"></i>
                            <span class="fs-5">Mon compte</span>
                        </a>
                    </li>

                    <li class="nav-item ps-4 py-2">
                        <a class='nav-link' href="#">
                            <i class="fas fa-gear fa-lg me-2"></i>
                            <span class="fs-5">Paramètres</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content" style="z-index: 1; margin-left: 250px;">

            <div>

                <!-- Start Content-->
                <div class="container-fluid px-0">
                    @yield('content')
                </div> <!-- container -->

            </div> <!-- content -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="assets/libs/morris.js/morris.min.js"></script>

    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="assets/js/pages/dashboard.js"></script>

</body>
</html>