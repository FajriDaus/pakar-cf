<?php

session_start();

if ($_SESSION["status"] != 'login') {
    //Jangan menampilkan data yang dilindungi, kembali ke halaman login
    header('Location:../signin ');
}

include 'head.php';

?>



<title>Dashboard | Riwayat Diagnosa</title>

<style>
    .img{
        background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    }
</style>

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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <center><canvas id="myChart" style="width:100%;max-width:700px"></canvas></center> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <label for="search">Search :</label>
                                <input class="border rounded bg-light sm mb-4 col-xs-2" type="text" id="search" onkeyup="searchTable()">
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Hasil Penyakit</th>
                                            <th>Nilai CF</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot style="border-top: #37393b;">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Hasil Penyakit</th>
                                            <th>Nilai CF</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <?php

                                            $sqlgjl = mysqli_query($conn, "SELECT * FROM gejala order by id+0");
                                            while ($rgjl = mysqli_fetch_array($sqlgjl)) {
                                                $argjl[$rgjl['id']] = $rgjl['gejala'];
                                            }

                                            $sqlpkt = mysqli_query($conn, "SELECT * FROM penyakit order by id+0");
                                            while ($rpkt = mysqli_fetch_array($sqlpkt)) {
                                                $arpkt[$rpkt['id']] = $rpkt['nama_penyakit'];
                                                $ardpkt[$rpkt['id']] = $rpkt['det_penyakit'];
                                                $arspkt[$rpkt['id']] = $rpkt['srn_penyakit'];
                                                $argpkt[$rpkt['id']] = $rpkt['img'];
                                            }
                                            
                                            $sqlpkt1 = mysqli_query($conn, "SELECT COUNT(nama_penyakit), id, nama_penyakit FROM penyakit order by id+0");
                                            while ($rpkt1 = mysqli_fetch_array($sqlpkt1)) {
                                                $arpkt1[$rpkt1['id']] = $rpkt1['nama_penyakit'];
                                            }

                                            $tampil = mysqli_query($conn, "SELECT * FROM riwayat ORDER BY id");
                                            $baris = mysqli_num_rows($tampil);


                                            $edge = 25;
                                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                            $firstPage = ($page > 1) ? ($page * $edge) - $edge : 0;

                                            $previous = $page - 1;
                                            $next = $page + 1;


                                            $query = "SELECT * FROM penyakit";
                                            $sql = mysqli_query($conn, $query);
                                            $bil = $firstPage + 1;
                                            $d = mysqli_num_rows($sql);
                                            $pages = ceil($d / $edge);

                                            $datatable = mysqli_query($conn, "SELECT * FROM riwayat ORDER BY id DESC LIMIT $firstPage, $edge");


                                            while ($d = mysqli_fetch_array($datatable)) {
                                            ?>
                                        <tr>
                                            <td><?= $bil++; ?></td>
                                            <td><?= $d['tanggal']; ?></td>
                                            <td><?= $arpkt[$d['hasil_id']]; ?></td>
                                            <td><?= $d['hasil_nilai']; ?></td>
                                            <td>
                                                <button class='btn btn-danger btn-sm' type='button' data-target='#modalHapusData<?= $d['id']; ?>' data-toggle='modal'>Hapus</button>
                                                <button class='btn btn-primary btn-sm' type='button' data-target='#modalPreviewData<?= $d['id']; ?>' data-toggle='modal'><i class="fas fa-eye"></i></button>
                                            </td>
                                        </tr>
                                        </tr>

                                        <!-- Modals -->

                                        <!-- Modal Preview Data -->
                                        <div class="modal fade" id="modalPreviewData<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Data Penyakit</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row no-gutters">
                                                            <div class="col-md-6 d-flex">
                                                                <div class="modal-body p-5 img d-flex" style="background-image: url(../gambar/penyakit/<?= $argpkt[$d['hasil_id']]; ?>);" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 d-flex">
                                                                <div class="modal-body p-5 d-flex align-items-center">
                                                                    <div class="text w-100 py-5">
                                                                        <h2 class="mb-0">Tanggal : </h2>
                                                                        <h2 class="mb-0 text-primary"><?= $d['tanggal']; ?></h2><br>
                                                                        <h4 class="mb-4">Penyakit : </h4>
                                                                        <h4 class="mb-4 text-danger"><?= $arpkt[$d['hasil_id']]; ?></h4>
                                                                        <h5 class="mb-4">Nilai CF :</h5>
                                                                        <h5 class="mb-4 text-success"><?= $d['hasil_nilai']; ?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Of Modal Edit -->

                                        <!-- Modal Hapus -->
                                        <div class="modal fade" id="modalHapusData<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="module/riwayat/delete" method="post" enctype="multipart/form-data" role="form">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" class="form-control" id="input-ame" value="<?php echo $d['id'] ?>" required autofocus>
                                                            <p><strong>Anda Yakin Ingin Menghapus Data Ini ?</strong></p>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <!-- End Of Modal Hapus -->

                            <!-- End Of Modals -->


                        <?php } ?>
                        </tbody>
                        </table>
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" <?php if ($page > 1) {
                                                                echo "href='?page=$previous'";
                                                            } ?>>
                                        << </a>
                                </li>
                                <?php
                                for ($x = 1; $x <= $pages; $x++) {
                                ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                <?php
                                }
                                ?>
                                <li class="page-item">
                                    <a class="page-link" <?php if ($page < $pages) {
                                                                echo "href='?page=$next'";
                                                            } ?>>>></a>
                                </li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <?php include 'footer.php' ?>