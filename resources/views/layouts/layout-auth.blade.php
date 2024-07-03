
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>Virtu Doc | Authentification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VirtuBank" name="description" />
    <meta content="Dassoah Maixent" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body class="bg-estiam d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        @yield('content')
    </div>

    <!-- App js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>