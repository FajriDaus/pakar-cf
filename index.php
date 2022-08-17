<?php

session_start();
require_once 'config/config.php';

if (isset($_SESSION['username'])) {
    //Do not show protected data, redirect to login...
    header('Location:admin/ ');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta name="description" content="Sistem Pakar Berbasis Website Metode Certainty Factor">
    <meta name="author" content="Muhammad Fajri Firdaus, For Skripsi">
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
    <title>Halaman utama</title>

    <!-- CSS Buatan Sendiri -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Carousel -->
    <link href="assets/css/carousel.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/all.css">

    <style>
    .img{
        background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    width: 47.8rem;
    height: auto;
    }
    </style>

</head>

<body>

    <header id="main">
        <nav class="navbar py-3 navbar-expand-md navbar-light fixed-top bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASE_URL; ?>">Sistem Pakar</a>
            </div>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                </div>
                <a class="btn btn-outline-dark" href="signin" type="submit" data-toggle='tooltip' data-placement='left'>Login
                    <!-- <span>Klik Tombol Untuk Login</span> -->
                </a>
            </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1440" height="560" preserveAspectRatio="none" viewBox="0 0 1440 560">
                        <g mask="url(&quot;#SvgjsMask1000&quot;)" fill="none">
                            <rect width="1440" height="560" x="0" y="0" fill="#0e2a47"></rect>
                            <path d="M849.69 142.61L849.69 146.34L878.33 146.34L878.33 142.61zM871.73 144.47 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM844.99 169.99L843.56 173.43L853.62 177.59L855.04 174.15zM847.73 175.87 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM830.17 193.48L827.53 196.12L846.57 215.16L849.21 212.52zM841.29 213.84 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM807.48 209.51L804.04 210.94L809.72 224.65L813.16 223.22zM804.84 223.94 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM780.39 215.64L776.66 215.64L776.66 240.2L780.39 240.2zM771.93 240.2 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM753.01 210.94L749.57 209.51L743.44 224.3L746.89 225.73zM738.56 225.02 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM729.52 196.12L726.88 193.48L703.31 217.06L705.94 219.69zM698.03 218.37 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM713.49 173.43L712.06 169.99L699.39 175.24L700.81 178.68zM693.5 176.96 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM707.36 146.34L707.36 142.61L674.16 142.61L674.16 146.34zM667.56 144.47 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM712.06 118.96L713.49 115.52L697.84 109.03L696.41 112.48zM690.52 110.76 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM726.88 95.47L729.52 92.83L709.39 72.71L706.76 75.34zM701.48 74.03 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM749.57 79.44L753.01 78.01L746.79 62.98L743.34 64.4zM738.46 63.69 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM776.66 73.3L780.39 73.3L780.39 50.86L776.66 50.86zM771.93 50.86 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM804.04 78.01L807.48 79.44L814.48 62.55L811.03 61.12zM806.16 61.83 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM827.53 92.83L830.17 95.47L847.2 78.43L844.57 75.8zM839.28 77.12 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM843.56 115.52L844.99 118.96L871.31 108.06L869.89 104.61zM864 106.34 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM707.34 144.47 a71.19 71.19 0 1 0 142.38 0 a71.19 71.19 0 1 0 -142.38 0z" fill="#488fdb"></path>
                            <path d="M729.42 92.93 A70.1936 70.1936 0 0 1 847.68 127.58M847.68 127.58 A142.3872 142.3872 0 0 0 729.42 92.93" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M820.52 164.12 a12.81 12.81 0 1 0 25.62 0 a12.81 12.81 0 1 0 -25.62 0zM767.96 133.81 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM712.86 160.15 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM832.52 115.1 a4.98 4.98 0 1 0 9.96 0 a4.98 4.98 0 1 0 -9.96 0zM729.64 101.74 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM785.94 79.85 a4.98 4.98 0 1 0 9.96 0 a4.98 4.98 0 1 0 -9.96 0zM805.18 98.14 a9.26 9.26 0 1 0 18.52 0 a9.26 9.26 0 1 0 -18.52 0zM753.42 202.2 a11.39 11.39 0 1 0 22.78 0 a11.39 11.39 0 1 0 -22.78 0zM798.6 162.38 a3.56 3.56 0 1 0 7.12 0 a3.56 3.56 0 1 0 -7.12 0zM761.74 159.94 a2.85 2.85 0 1 0 5.7 0 a2.85 2.85 0 1 0 -5.7 0z" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M190.63 486.04L190.63 488.37L210.93 488.37L210.93 486.04zM206.8 487.2 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM187.69 503.15L186.8 505.3L206.71 513.55L207.6 511.4zM203.03 512.47 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM178.43 517.83L176.78 519.48L185.46 528.16L187.11 526.52zM182.16 527.34 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM164.25 527.85L162.1 528.74L165.48 536.91L167.63 536.02zM162.43 536.47 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM147.32 531.68L144.99 531.68L144.99 546.7L147.32 546.7zM142.02 546.7 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM130.2 528.74L128.05 527.85L125.69 533.55L127.84 534.45zM122.64 534 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM115.52 519.48L113.87 517.83L108.9 522.81L110.54 524.46zM105.59 523.63 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM105.5 505.3L104.61 503.15L96.03 506.71L96.92 508.86zM92.34 507.78 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM101.67 488.37L101.67 486.04L83.13 486.04L83.13 488.37zM79 487.2 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM104.61 471.26L105.5 469.11L91.5 463.31L90.61 465.46zM86.93 464.38 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM113.87 456.58L115.52 454.93L111.46 450.86L109.81 452.51zM106.5 451.69 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM128.05 446.55L130.2 445.66L125.49 434.28L123.34 435.17zM120.28 434.73 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM144.99 442.72L147.32 442.72L147.32 429.42L144.99 429.42zM142.02 429.42 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM162.1 445.66L164.25 446.55L166.66 440.74L164.5 439.85zM161.45 440.3 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM176.78 454.93L178.43 456.58L190 445L188.35 443.35zM185.05 444.18 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM186.8 469.11L187.69 471.26L201.98 465.34L201.09 463.19zM197.41 464.26 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM101.65 487.2 a44.5 44.5 0 1 0 89 0 a44.5 44.5 0 1 0 -89 0z" fill="#488fdb"></path>
                            <path d="M119.22 522.63 A43.496 43.496 0 0 1 128.85 446.21M128.85 446.21 A88.992 88.992 0 0 0 119.22 522.63" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M133.91 452.38 a8.9 8.9 0 1 0 17.8 0 a8.9 8.9 0 1 0 -17.8 0zM117.2 499.95 a8.9 8.9 0 1 0 17.8 0 a8.9 8.9 0 1 0 -17.8 0zM144.37 504.49 a8.9 8.9 0 1 0 17.8 0 a8.9 8.9 0 1 0 -17.8 0zM171.03 500.49 a5.34 5.34 0 1 0 10.68 0 a5.34 5.34 0 1 0 -10.68 0zM144.71 484.7 a2.67 2.67 0 1 0 5.34 0 a2.67 2.67 0 1 0 -5.34 0zM111.92 470.48 a8.9 8.9 0 1 0 17.8 0 a8.9 8.9 0 1 0 -17.8 0zM155.65 467.04 a4.45 4.45 0 1 0 8.9 0 a4.45 4.45 0 1 0 -8.9 0zM173.86 476.31 a7.56 7.56 0 1 0 15.12 0 a7.56 7.56 0 1 0 -15.12 0zM160.74 525.59 a2.22 2.22 0 1 0 4.44 0 a2.22 2.22 0 1 0 -4.44 0zM102.1 492.88 a1.78 1.78 0 1 0 3.56 0 a1.78 1.78 0 1 0 -3.56 0z" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M1251.9 125.94L1251.9 129.66L1274.99 129.66L1274.99 125.94zM1268.39 127.8 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1247.2 153.31L1245.77 156.76L1271.52 167.42L1272.94 163.98zM1265.63 165.7 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1232.37 176.81L1229.74 179.44L1247.99 197.69L1250.62 195.06zM1242.71 196.37 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1209.69 192.84L1206.24 194.26L1210.13 203.63L1213.57 202.21zM1205.25 202.92 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1182.6 198.97L1178.87 198.97L1178.87 214.68L1182.6 214.68zM1174.13 214.68 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1155.22 194.26L1151.77 192.84L1143.09 213.81L1146.53 215.24zM1138.21 214.52 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1131.72 179.44L1129.09 176.81L1111.41 194.48L1114.05 197.12zM1106.13 195.8 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1115.69 156.76L1114.27 153.31L1102.29 158.27L1103.72 161.72zM1096.41 159.99 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1109.56 129.66L1109.56 125.94L1082.09 125.94L1082.09 129.66zM1075.49 127.8 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1114.27 102.29L1115.69 98.84L1089.55 88.01L1088.12 91.46zM1082.23 89.73 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1129.09 78.79L1131.72 76.16L1107.26 51.69L1104.62 54.33zM1099.34 53.01 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1151.77 62.76L1155.22 61.33L1148.31 44.66L1144.87 46.08zM1139.99 45.37 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1178.87 56.63L1182.6 56.63L1182.6 26.38L1178.87 26.38zM1174.13 26.38 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1206.24 61.33L1209.69 62.76L1219.91 38.09L1216.46 36.67zM1211.58 37.38 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1229.74 76.16L1232.37 78.79L1239.93 71.23L1237.3 68.6zM1232.01 69.92 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1245.77 98.84L1247.2 102.29L1265.72 94.61L1264.29 91.17zM1258.41 92.89 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM1109.54 127.8 a71.19 71.19 0 1 0 142.38 0 a71.19 71.19 0 1 0 -142.38 0z" fill="#488fdb"></path>
                            <path d="M1226.54 73.3 A70.1936 70.1936 0 0 1 1205.16 194.67M1205.16 194.67 A142.3872 142.3872 0 0 0 1226.54 73.3" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M1181.23 192.38 a5.7 5.7 0 1 0 11.4 0 a5.7 5.7 0 1 0 -11.4 0zM1167.27 110.4 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM1230.06 128.89 a10.68 10.68 0 1 0 21.36 0 a10.68 10.68 0 1 0 -21.36 0zM1211.76 177.15 a7.83 7.83 0 1 0 15.66 0 a7.83 7.83 0 1 0 -15.66 0zM1187.47 72.96 a12.81 12.81 0 1 0 25.62 0 a12.81 12.81 0 1 0 -25.62 0zM1123.59 132.18 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM1145.64 89.3 a7.12 7.12 0 1 0 14.24 0 a7.12 7.12 0 1 0 -14.24 0zM1144.97 165.3 a7.83 7.83 0 1 0 15.66 0 a7.83 7.83 0 1 0 -15.66 0zM1222.72 90.95 a7.12 7.12 0 1 0 14.24 0 a7.12 7.12 0 1 0 -14.24 0zM1210.63 117.13 a3.56 3.56 0 1 0 7.12 0 a3.56 3.56 0 1 0 -7.12 0z" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M532.77 189.76L532.77 193.49L563.04 193.49L563.04 189.76zM556.44 191.62 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM528.07 217.14L526.64 220.58L536.46 224.65L537.89 221.2zM530.58 222.93 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM513.24 240.63L510.61 243.26L534.25 266.91L536.89 264.27zM528.97 265.59 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM490.56 256.66L487.12 258.09L496.8 281.47L500.25 280.04zM491.92 280.76 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM463.47 262.79L459.74 262.79L459.74 282.64L463.47 282.64zM455 282.64 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM436.09 258.09L432.65 256.66L419.75 287.81L423.19 289.23zM414.87 288.52 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM412.6 243.26L409.96 240.63L396.87 253.72L399.5 256.36zM391.58 255.04 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM396.56 220.58L395.14 217.14L386.1 220.88L387.53 224.32zM380.22 222.6 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM390.43 193.49L390.43 189.76L380.18 189.76L380.18 193.49zM373.58 191.62 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM395.14 166.11L396.56 162.67L387.01 158.71L385.58 162.15zM379.7 160.43 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM409.96 142.62L412.6 139.98L388.69 116.07L386.05 118.71zM380.77 117.39 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM432.65 126.58L436.09 125.16L427.85 105.28L424.41 106.7zM419.53 105.99 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM459.74 120.45L463.47 120.45L463.47 101.98L459.74 101.98zM455 101.98 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM487.12 125.16L490.56 126.58L498.88 106.49L495.44 105.06zM490.56 105.78 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM510.61 139.98L513.24 142.62L527.27 128.59L524.63 125.96zM519.35 127.28 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM526.64 162.67L528.07 166.11L560.21 152.8L558.78 149.35zM552.9 151.07 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM390.41 191.62 a71.19 71.19 0 1 0 142.38 0 a71.19 71.19 0 1 0 -142.38 0z" fill="#488fdb"></path>
                            <path d="M444.75 122.45 A70.1936 70.1936 0 0 1 529.97 211.47M529.97 211.47 A142.3872 142.3872 0 0 0 444.75 122.45" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M464.71 187.28 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM417.21 186.22 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM399.96 221.44 a11.39 11.39 0 1 0 22.78 0 a11.39 11.39 0 1 0 -22.78 0zM460.32 158.97 a3.56 3.56 0 1 0 7.12 0 a3.56 3.56 0 1 0 -7.12 0zM438.24 224.38 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM481.01 230.87 a12.1 12.1 0 1 0 24.2 0 a12.1 12.1 0 1 0 -24.2 0zM401.39 155.41 a5.7 5.7 0 1 0 11.4 0 a5.7 5.7 0 1 0 -11.4 0zM506.4 199.26 a12.81 12.81 0 1 0 25.62 0 a12.81 12.81 0 1 0 -25.62 0zM430.44 253.32 a3.56 3.56 0 1 0 7.12 0 a3.56 3.56 0 1 0 -7.12 0zM455.85 134.27 a6.41 6.41 0 1 0 12.82 0 a6.41 6.41 0 1 0 -12.82 0z" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M1354.58 353.36L1354.58 355.69L1374.04 355.69L1374.04 353.36zM1369.91 354.52 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1351.63 370.47L1350.74 372.62L1362.51 377.49L1363.41 375.34zM1358.83 376.42 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1342.37 385.15L1340.72 386.8L1355.72 401.79L1357.37 400.15zM1352.41 400.97 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1328.19 395.17L1326.04 396.06L1328.28 401.46L1330.43 400.56zM1325.22 401.01 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1311.26 399L1308.93 399L1308.93 418.68L1311.26 418.68zM1305.96 418.68 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1294.15 396.06L1292 395.17L1283.94 414.62L1286.09 415.51zM1280.89 415.06 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1279.47 386.8L1277.82 385.15L1271.7 391.27L1273.35 392.91zM1268.4 392.09 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1269.45 372.62L1268.55 370.47L1257.27 375.14L1258.16 377.29zM1253.59 376.21 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1265.61 355.69L1265.61 353.36L1248.19 353.36L1248.19 355.69zM1244.06 354.52 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1268.55 338.57L1269.45 336.42L1256.5 331.06L1255.61 333.21zM1251.93 332.14 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1277.82 323.89L1279.47 322.24L1270.22 313L1268.57 314.64zM1265.26 313.82 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1292 313.87L1294.15 312.98L1288.65 299.69L1286.49 300.59zM1283.44 300.14 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1308.93 310.04L1311.26 310.04L1311.26 290.78L1308.93 290.78zM1305.96 290.78 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1326.04 312.98L1328.19 313.87L1335.65 295.86L1333.5 294.96zM1330.45 295.41 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1340.72 322.24L1342.37 323.89L1351.03 315.24L1349.38 313.59zM1346.07 314.41 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1350.74 336.42L1351.63 338.57L1362.89 333.91L1362 331.76zM1358.31 332.84 a4.13 4.13 0 1 0 8.26 0 a4.13 4.13 0 1 0 -8.26 0zM1265.59 354.52 a44.5 44.5 0 1 0 89 0 a44.5 44.5 0 1 0 -89 0z" fill="#488fdb"></path>
                            <path d="M1309.28 310.03 A43.496 43.496 0 0 1 1349.08 375.98M1349.08 375.98 A88.992 88.992 0 0 0 1309.28 310.03" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M1327.54 376.88 a8.9 8.9 0 1 0 17.8 0 a8.9 8.9 0 1 0 -17.8 0zM1308.75 336.13 a8.9 8.9 0 1 0 17.8 0 a8.9 8.9 0 1 0 -17.8 0zM1344.74 343 a4 4 0 1 0 8 0 a4 4 0 1 0 -8 0zM1278.98 383.1 a7.12 7.12 0 1 0 14.24 0 a7.12 7.12 0 1 0 -14.24 0zM1296.04 365.66 a8.9 8.9 0 1 0 17.8 0 a8.9 8.9 0 1 0 -17.8 0zM1270.55 360 a8.01 8.01 0 1 0 16.02 0 a8.01 8.01 0 1 0 -16.02 0zM1308.19 386.91 a4.45 4.45 0 1 0 8.9 0 a4.45 4.45 0 1 0 -8.9 0zM1343.95 359.62 a1.78 1.78 0 1 0 3.56 0 a1.78 1.78 0 1 0 -3.56 0zM1271.02 339.51 a3.56 3.56 0 1 0 7.12 0 a3.56 3.56 0 1 0 -7.12 0zM1333.81 327.56 a4.89 4.89 0 1 0 9.78 0 a4.89 4.89 0 1 0 -9.78 0z" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M756.81 440.24L756.81 443.96L777.15 443.96L777.15 440.24zM770.55 442.1 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM752.11 467.61L750.68 471.06L781.58 483.85L783 480.41zM775.69 482.13 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM737.29 491.11L734.65 493.74L742.25 501.34L744.88 498.7zM736.96 500.02 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM714.6 507.14L711.16 508.57L721.05 532.45L724.49 531.02zM716.17 531.74 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM687.51 513.27L683.78 513.27L683.78 524.81L687.51 524.81zM679.05 524.81 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM660.13 508.57L656.69 507.14L647.3 529.79L650.75 531.22zM642.43 530.51 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM636.64 493.74L634 491.11L610.3 514.81L612.94 517.45zM605.02 516.13 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM620.61 471.06L619.18 467.61L597.7 476.51L599.13 479.96zM591.81 478.23 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM614.48 443.96L614.48 440.24L603.41 440.24L603.41 443.96zM596.81 442.1 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM619.18 416.59L620.61 413.14L598.05 403.8L596.63 407.25zM590.74 405.52 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM634 393.09L636.64 390.46L618.55 372.37L615.92 375.01zM610.63 373.69 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM656.69 377.06L660.13 375.64L653.77 360.28L650.33 361.71zM645.45 360.99 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM683.78 370.93L687.51 370.93L687.51 351.52L683.78 351.52zM679.05 351.52 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM711.16 375.64L714.6 377.06L723.71 355.08L720.26 353.66zM715.38 354.37 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM734.65 390.46L737.29 393.09L749.17 381.22L746.53 378.58zM741.25 379.9 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM750.68 413.14L752.11 416.59L774.2 407.44L772.77 403.99zM766.89 405.72 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM614.46 442.1 a71.19 71.19 0 1 0 142.38 0 a71.19 71.19 0 1 0 -142.38 0z" fill="#488fdb"></path>
                            <path d="M638.01 389.19 A70.1936 70.1936 0 0 1 755.25 427.15M755.25 427.15 A142.3872 142.3872 0 0 0 638.01 389.19" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M656.49 437.8 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM652.75 478.29 a12.1 12.1 0 1 0 24.2 0 a12.1 12.1 0 1 0 -24.2 0zM640.52 390.22 a5.7 5.7 0 1 0 11.4 0 a5.7 5.7 0 1 0 -11.4 0zM705.9 469.54 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM696.89 402.99 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM615.43 435 a12.81 12.81 0 1 0 25.62 0 a12.81 12.81 0 1 0 -25.62 0zM672.95 379.31 a7.83 7.83 0 1 0 15.66 0 a7.83 7.83 0 1 0 -15.66 0zM620.96 470.7 a4.98 4.98 0 1 0 9.96 0 a4.98 4.98 0 1 0 -9.96 0zM739.62 446.92 a2.85 2.85 0 1 0 5.7 0 a2.85 2.85 0 1 0 -5.7 0zM677.57 504.01 a4.27 4.27 0 1 0 8.54 0 a4.27 4.27 0 1 0 -8.54 0z" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M1097.7 356.74L1097.7 358.61L1104.74 358.61L1104.74 356.74zM1101.44 357.67 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1095.35 370.43L1094.63 372.15L1101.29 374.91L1102.01 373.19zM1098.35 374.05 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1087.93 382.18L1086.62 383.5L1092.15 389.03L1093.47 387.71zM1089.51 388.37 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1076.59 390.19L1074.87 390.91L1080.76 405.13L1082.48 404.41zM1078.32 404.77 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1063.04 393.26L1061.18 393.26L1061.18 410.66L1063.04 410.66zM1058.81 410.66 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1049.36 390.91L1047.63 390.19L1040.93 406.39L1042.65 407.1zM1038.49 406.75 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1037.61 383.5L1036.29 382.18L1026 392.47L1027.31 393.79zM1023.36 393.13 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1029.59 372.15L1028.88 370.43L1020 374.11L1020.71 375.83zM1017.06 374.97 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1026.53 358.61L1026.53 356.74L1017.07 356.74L1017.07 358.61zM1013.77 357.67 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1028.88 344.92L1029.59 343.2L1014.14 336.79L1013.42 338.52zM1010.48 337.65 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1036.29 333.17L1037.61 331.85L1029.93 324.17L1028.61 325.49zM1025.97 324.83 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1047.63 325.16L1049.36 324.44L1044.33 312.31L1042.61 313.02zM1040.17 312.67 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1061.18 322.09L1063.04 322.09L1063.04 317.68L1061.18 317.68zM1058.81 317.68 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1074.87 324.44L1076.59 325.16L1080.77 315.07L1079.05 314.35zM1076.61 314.71 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1086.62 331.85L1087.93 333.17L1093.14 327.97L1091.82 326.65zM1089.18 327.31 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1094.63 343.2L1095.35 344.92L1111.18 338.36L1110.47 336.64zM1107.52 337.5 a3.3 3.3 0 1 0 6.6 0 a3.3 3.3 0 1 0 -6.6 0zM1026.51 357.67 a35.6 35.6 0 1 0 71.2 0 a35.6 35.6 0 1 0 -71.2 0z" fill="#488fdb"></path>
                            <path d="M1027.52 366.05 A34.5968 34.5968 0 0 1 1072.09 323.5M1072.09 323.5 A71.1936 71.1936 0 0 0 1027.52 366.05" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M1056.18 366.87 a7.12 7.12 0 1 0 14.24 0 a7.12 7.12 0 1 0 -14.24 0zM1062.43 326.83 a4.27 4.27 0 1 0 8.54 0 a4.27 4.27 0 1 0 -8.54 0zM1026.84 354.99 a2.14 2.14 0 1 0 4.28 0 a2.14 2.14 0 1 0 -4.28 0zM1072.82 387.24 a2.85 2.85 0 1 0 5.7 0 a2.85 2.85 0 1 0 -5.7 0zM1037.32 335.67 a7.12 7.12 0 1 0 14.24 0 a7.12 7.12 0 1 0 -14.24 0zM1050.21 387.47 a4.63 4.63 0 1 0 9.26 0 a4.63 4.63 0 1 0 -9.26 0zM1076.74 357.69 a7.12 7.12 0 1 0 14.24 0 a7.12 7.12 0 1 0 -14.24 0zM1068.36 340.93 a3.2 3.2 0 1 0 6.4 0 a3.2 3.2 0 1 0 -6.4 0zM1033.23 376.74 a3.56 3.56 0 1 0 7.12 0 a3.56 3.56 0 1 0 -7.12 0zM1076.5 373.09 a1.42 1.42 0 1 0 2.84 0 a1.42 1.42 0 1 0 -2.84 0z" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M216.72 117.38L216.72 121.11L240.87 121.11L240.87 117.38zM234.27 119.24 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM212.02 144.76L210.59 148.2L228.61 155.66L230.03 152.22zM222.72 153.94 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM197.2 168.25L194.56 170.89L204.56 180.89L207.19 178.25zM199.28 179.57 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM174.51 184.28L171.07 185.71L176.81 199.57L180.25 198.14zM171.93 198.85 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM147.42 190.41L143.69 190.41L143.69 203.56L147.42 203.56zM138.95 203.56 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM120.04 185.71L116.6 184.28L109.7 200.92L113.15 202.35zM104.83 201.64 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM96.55 170.89L93.91 168.25L83.76 178.41L86.39 181.04zM78.47 179.72 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM80.51 148.2L79.09 144.76L61.85 151.9L63.27 155.34zM55.96 153.62 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM74.38 121.11L74.38 117.38L63.55 117.38L63.55 121.11zM56.95 119.24 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM79.09 93.73L80.51 90.29L64.56 83.68L63.13 87.12zM57.25 85.4 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM93.91 70.24L96.55 67.6L81.59 52.65L78.96 55.28zM73.67 53.97 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM116.6 54.21L120.04 52.78L115.66 42.2L112.21 43.63zM107.34 42.91 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM143.69 48.08L147.42 48.08L147.42 14.07L143.69 14.07zM138.95 14.07 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM171.07 52.78L174.51 54.21L178.32 45.01L174.87 43.59zM170 44.3 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM194.56 67.6L197.2 70.24L221.75 45.68L219.12 43.04zM213.84 44.36 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM210.59 90.29L212.02 93.73L242 81.31L240.57 77.87zM234.68 79.59 a6.6 6.6 0 1 0 13.2 0 a6.6 6.6 0 1 0 -13.2 0zM74.36 119.24 a71.19 71.19 0 1 0 142.38 0 a71.19 71.19 0 1 0 -142.38 0z" fill="#488fdb"></path>
                            <path d="M82.11 86.93 A70.1936 70.1936 0 0 1 205.17 80.33M205.17 80.33 A142.3872 142.3872 0 0 0 82.11 86.93" fill="#2672c3" fill-rule="nonzero"></path>
                            <path d="M174.99 154.38 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM116.44 86.78 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM161.79 67.93 a12.1 12.1 0 1 0 24.2 0 a12.1 12.1 0 1 0 -24.2 0zM107.04 145.9 a14.24 14.24 0 1 0 28.48 0 a14.24 14.24 0 1 0 -28.48 0zM88.1 79.78 a5.7 5.7 0 1 0 11.4 0 a5.7 5.7 0 1 0 -11.4 0zM74.82 119.92 a7.12 7.12 0 1 0 14.24 0 a7.12 7.12 0 1 0 -14.24 0zM150.52 110.72 a6.41 6.41 0 1 0 12.82 0 a6.41 6.41 0 1 0 -12.82 0zM180.23 99.36 a7.83 7.83 0 1 0 15.66 0 a7.83 7.83 0 1 0 -15.66 0zM200.55 120.51 a5.7 5.7 0 1 0 11.4 0 a5.7 5.7 0 1 0 -11.4 0zM129.96 177.82 a7.12 7.12 0 1 0 14.24 0 a7.12 7.12 0 1 0 -14.24 0z" fill="#2672c3" fill-rule="nonzero"></path>
                        </g>
                        <defs>
                            <mask id="SvgjsMask1000">
                                <rect width="1440" height="560" fill="#ffffff"></rect>
                            </mask>
                        </defs>
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Sistem Pakar Diagnosa Hama dan Penyakit Pada Alpukat</h1><br>
                            <p>Sistem Pakar Diagnosa Hama dan Penyakit Pada Alpukat,
                                Aplikasi Ini Dibuat Untuk Membantu Para Petani Maupun Pemilik Tanaman Alpukat Untuk Mendiagnosa
                                Gejala Yang Terjadi Pada Tanaman Alpukatnya</p>
                            <p data-toggle='tooltip' data-placement='right'><button class="btn btn-lg btn-primary" onclick="$('#modalForm').modal('show');" type="button" data-target="#modalForm" data-toggle="modal" data-whatever="@getbootstrap" title="Klik tombol ini untuk mulai konsultasi penyakit">Mulai Diagnosa</button></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1440" height="560" preserveAspectRatio="none" viewBox="0 0 1440 560">
                        <g mask="url(&quot;#SvgjsMask1015&quot;)" fill="none">
                            <rect width="1440" height="560" x="0" y="0" fill="#0e2a47"></rect>
                            <path d="M48 560L608 0L957.5 0L397.5 560z" fill="url(#SvgjsLinearGradient1016)"></path>
                            <path d="M317.8 560L877.8 0L1341.3 0L781.3 560z" fill="url(#SvgjsLinearGradient1016)"></path>
                            <path d="M669.6 560L1229.6 0L1682.6 0L1122.6 560z" fill="url(#SvgjsLinearGradient1016)"></path>
                            <path d="M1421 560L861 0L775.5 0L1335.5 560z" fill="url(#SvgjsLinearGradient1017)"></path>
                            <path d="M1090.2 560L530.2 0L167.20000000000005 0L727.2 560z" fill="url(#SvgjsLinearGradient1017)"></path>
                            <path d="M785.4 560L225.39999999999998 0L123.39999999999998 0L683.4 560z" fill="url(#SvgjsLinearGradient1017)"></path>
                            <path d="M949.2429551881078 560L1440 69.24295518810771L1440 560z" fill="url(#SvgjsLinearGradient1016)"></path>
                            <path d="M0 560L490.7570448118923 560L 0 69.24295518810771z" fill="url(#SvgjsLinearGradient1017)"></path>
                        </g>
                        <defs>
                            <mask id="SvgjsMask1015">
                                <rect width="1440" height="560" fill="#ffffff"></rect>
                            </mask>
                            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%" id="SvgjsLinearGradient1016">
                                <stop stop-color="rgba(15, 70, 185, 0.2)" offset="0"></stop>
                                <stop stop-opacity="0" stop-color="rgba(15, 70, 185, 0.2)" offset="0.66"></stop>
                            </linearGradient>
                            <linearGradient x1="100%" y1="100%" x2="0%" y2="0%" id="SvgjsLinearGradient1017">
                                <stop stop-color="rgba(15, 70, 185, 0.2)" offset="0"></stop>
                                <stop stop-opacity="0" stop-color="rgba(15, 70, 185, 0.2)" offset="0.66"></stop>
                            </linearGradient>
                        </defs>
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Sistem Pakar Diagnosa Hama dan Penyakit Pada Alpukat</h1><br>
                            <p>Sistem Pakar Diagnosa Hama dan Penyakit Pada Alpukat,
                                Aplikasi Ini Dibuat Untuk Membantu Para Petani Maupun Pemilik Tanaman Alpukat Untuk Mendiagnosa
                                Gejala Yang Terjadi Pada Tanaman Alpukatnya</p>
                            <p><button class="btn btn-lg btn-primary" onclick="$('#modalForm').modal('show');" type="button" data-target="#modalForm" data-toggle="modal" data-whatever="@getbootstrap" title="Klik tombol ini untuk mulai konsultasi penyakit">Mulai Diagnosa</button></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <!-- START THE FEATURETTES -->


            <section id="gallery">
                <div class="container">
                    <div class="row">
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM post");

                        while ($p = mysqli_fetch_array($sql)) {
                        ?>
                            <div class="col-lg-4 mb-4">
                                <div class="card">
                                    <img src="gambar/post/<?= $p['gambar']; ?>" width="700" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $p['nama']; ?></h5><br>
                                        <button class='btn btn-primary' type='button' onclick="$('#modalPreviewData<?= $p['id']; ?>').modal('show');" data-target="#modalPreviewData<?= $p['id']; ?>" data-toggle='modal'>Read More</button>
                                    </div>
                                </div>
                            </div>


                            <!-- Start Of Modal Preview Post -->
                            <div class="modal fade" id="modalPreviewData<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?= $p['nama']; ?></h5>
                                            <button type="button" class="close" onclick="$('#modalPreviewData<?= $p['id']; ?>').modal('hide');" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-center"><?= $p['nama']; ?></h3>
                                            <h4>Detail :</h4>
                                            <p><?= $p['detail']; ?></p>
                                            <h4>Gambar :</h4>
                                            <img class="img" src="gambar/post/<?= $p['gambar']; ?>" width="700px" alt="" class="card-img-top"><br><br>
                                            <h4>Saran :</h4>
                                            <p>Hal yang bisa dilakukan adalah :</p>
                                            <p><?= $p['saran']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Modal Preview Post -->
                        <?php } ?>
                    </div>
                </div>
            </section>



            <!-- /END THE FEATURETTES -->


            <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">PASTIKAN :</h5>
                            <button type="button" class="close" onclick="$('#modalForm').modal('hide');" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>1. Semua data diisi dengan sebenarnya agar hasil yang didapatkan sesuai</p>
                            <p>2. Data diisi dengan gejala yang terlihat</p>
                            <p>3. Untuk kondisi, silahkan pilih dari beberapa pilihan yang ada yang paling mendekati</p>
                        </div>
                        <div class="modal-footer">
                            <a type="submit" class="btn btn-info" href="konsultasi/">Lanjut ></a>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- /.container -->

        <!-- FOOTER -->
        <div class="footer-basic">
            <footer>
                <p class="copyright">Muhammad Fajri Firdaus © 2022</p>
            </footer>
        </div>
    </main>


    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>


</body>

</html>