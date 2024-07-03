
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>Login - VirtuBank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VirtuBank" name="description" />
    <meta content="Dassoah Maixent" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>
    <style>
        .bg-estiam{
            background: #6a1b9a  !important;
        }

        .btn-estiam{
            background: #6a1b9a  !important;
            color: #ffffff !important;
        }
    </style>
</head>

<body class="bg-estiam d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        @yield('content')
    </div>

    <!-- App js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>
</html>