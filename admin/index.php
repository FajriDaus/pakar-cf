<?php

session_start();


if ($_SESSION["status"] != 'login') {
    //Jangan menampilkan data yang dilindungi, kembali ke halaman login
    header('Location:../signin ');
}

include 'head.php';

?>

<title>Dashboard Admin</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'side.php' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'nav.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card Total Gejala -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Gejala</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php $sql = "SELECT * FROM gejala";
                                                $query = mysqli_query($conn, $sql);
                                                $data = array();
                                                while (($row = mysqli_fetch_array($query)) != null) {
                                                    $data[] = $row;
                                                }
                                                $count = count($data);
                                                echo $count; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-flask fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Total Penyakit -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Penyakit</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php $sql = "SELECT * FROM penyakit";
                                                $query = mysqli_query($conn, $sql);
                                                $data = array();
                                                while (($row = mysqli_fetch_array($query)) != null) {
                                                    $data[] = $row;
                                                }
                                                $count = count($data);
                                                echo $count; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bug fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Pengetahuan -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Pengetahuan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php $sql = "SELECT * FROM pengetahuan";
                                                $query = mysqli_query($conn, $sql);
                                                $data = array();
                                                while (($row = mysqli_fetch_array($query)) != null) {
                                                    $data[] = $row;
                                                }
                                                $count = count($data);
                                                echo $count; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-microscope fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Total Aplikasi Digunakan -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Aplikasi Digunakan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php $sql = "SELECT * FROM riwayat";
                                                $query = mysqli_query($conn, $sql);
                                                $data = array();
                                                while (($row = mysqli_fetch_array($query)) != null) {
                                                    $data[] = $row;
                                                }
                                                $count = count($data);
                                                echo $count; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include 'footer.php' ?>