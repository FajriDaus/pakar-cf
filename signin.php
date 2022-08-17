<?php

include 'config/config.php';

if (isset($_SESSION['pesan'])) {
    echo '<p style="color:red;">' . $_SESSION['pesan'] . '</p>';
    unset($_SESSION['pesan']);
}

if(isset($_SESSION['username']))
{
    //Do not show protected data, redirect to login...
    header('Location:admin/ ');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Login Sistem Pakar Certainty Factor Skripsi Muhammad Fajri Firdaus">
    <meta name="author" content="Muhammad Fajri Firdaus | 18101152610692">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/css/all.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin Sistem Pakar!</h1>
                                    </div>
                                    <form class="user" action="core/prosesLogin" method="POST">
                                        <div class="form-group">
                                            <label class="form-control-placeholder" for="username">Username</label>
                                            <input name="username" type="text" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Enter Username..." required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-placeholder" for="password">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password" required><br>
                                            <div class="form-group form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="showPass();">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Tampilkan Password</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        Hanya Ingin Konsultasi ?<a href="<?= BASE_URL; ?>"> Klik Disini!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/showPass.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>