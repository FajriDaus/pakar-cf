<?php

session_start();

if ($_SESSION["status"] != 'login') {
    //Jangan menampilkan data yang dilindungi, kembali ke halaman login
    header('Location:../signin ');
}

include 'head.php';

?>



<title>Dashboard | Pengetahuan</title>

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
                            <button class="btn btn-primary" type="button" data-target="#modalAdd" data-toggle="modal" data-whatever="@getbootstrap">Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <label for="search">Search :</label>
                                <input class="border rounded bg-light sm mb-4 col-xs-2" type="text" id="search" onkeyup="searchTable()">
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Penyakit</th>
                                            <th>Gejala</th>
                                            <th>MB</th>
                                            <th>MD</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot style="border-top: #37393b;">
                                        <tr>
                                            <th>No</th>
                                            <th>Penyakit</th>
                                            <th>Gejala</th>
                                            <th>MB</th>
                                            <th>MD</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $edge = 25;
                                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                            $firstPage = ($page > 1) ? ($page * $edge) - $edge : 0;

                                            $previous = $page - 1;
                                            $next = $page + 1;


                                            $query = "SELECT * FROM pengetahuan";
                                            $sql = mysqli_query($conn, $query);
                                            $bil = $firstPage + 1;
                                            $d = mysqli_num_rows($sql);
                                            $pages = ceil($d / $edge);

                                            $datatable = mysqli_query($conn, "SELECT a.*, b.kode_penyakit, b.nama_penyakit, c.kode_gejala, c.gejala FROM pengetahuan a INNER JOIN penyakit b ON a.kode_penyakit=b.kode_penyakit INNER JOIN gejala c ON a.kode_gejala=c.kode_gejala ORDER BY a.id  ASC");

                                            while ($d = mysqli_fetch_array($datatable)) {
                                                $penyakit = mysqli_query($conn, "SELECT * FROM penyakit WHERE kode_penyakit = '$d[kode_penyakit]'");
                                                $p = mysqli_fetch_array($penyakit);
                                                $gejala = mysqli_query($conn, "SELECT * FROM gejala WHERE kode_gejala = '$d[kode_gejala]'");
                                                $g = mysqli_fetch_array($gejala);
                                            ?>
                                        <tr>
                                            <td><?= $bil++; ?></td>
                                            <td><?= $p['nama_penyakit']; ?></td>
                                            <td><?= $g['gejala']; ?></td>
                                            <td><?= $d['mb']; ?></td>
                                            <td><?= $d['md']; ?></td>
                                            <td>
                                                <a href="" class='btn btn-secondary btn-sm' type='button' data-target="#modalEditData<?= $d['id']; ?>" data-toggle='modal'>Ubah</a>
                                                <button class='btn btn-danger btn-sm' type='button' data-target='#modalHapusData<?= $d['id']; ?>' data-toggle='modal'>Hapus</button>
                                            </td>
                                        </tr>
                                        </tr>

                                        <!-- Modals -->

                                        <!-- Modal Tambah Data -->
                                        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengetahuan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="module/pengetahuan/add" method="post" enctype="multipart/form-data" role="form">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Penyakit :</label>
                                                                <select name="penyakit" class="form-control" id="input-ame" placeholder="isikan penyakit" required autofocus>
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * FROM penyakit");
                                                                    while ($p = mysqli_fetch_array($sql)) {
                                                                    ?>
                                                                        <option value="<?= $p['kode_penyakit']; ?>"><?= $p['kode_penyakit']; ?> || <?= $p['nama_penyakit']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Gejala :</label>
                                                                <select name="gejala" class="form-control" id="input-ame" placeholder="isikan penyakit" required autofocus>
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * FROM gejala");
                                                                    while ($p = mysqli_fetch_array($sql)) {
                                                                    ?>
                                                                        <option value="<?= $p['kode_gejala']; ?>"><?= $p['kode_gejala']; ?> || <?= $p['gejala']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">MB :</label>
                                                                <input type="text" name="mb" class="form-control" id="input-ame" placeholder="isikan MB" required autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">MD :</label>
                                                                <input type="text" name="md" class="form-control" id="input-ame" placeholder="isikan MD" required autofocus>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="submit" class="btn btn-info">Tambahkan</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <!-- End Of Modal -->

                            <!-- Modal Edit/Ubah Data -->
                            <div class="modal fade" id="modalEditData<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Pengetahuan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="module/pengetahuan/edit" method="post" enctype="multipart/form-data" role="form">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Penyakit :</label>
                                                    <input type="hidden" name="id" class="form-control" value="<?= $d['id']; ?>">
                                                    <select name="penyakit" class="form-control" id="input-ame" placeholder="isikan penyakit" required autofocus>
                                                        <?php
                                                        $sql = mysqli_query($conn, "SELECT * FROM penyakit");
                                                        while ($p = mysqli_fetch_array($sql)) {
                                                        ?>
                                                            <option value="<?= $p['kode_penyakit']; ?>" selected><?= $p['kode_penyakit']; ?> || <?= $p['nama_penyakit']; ?></option>
                                                        <?php } ?>
                                                        <option value="<?= $d['kode_penyakit']; ?>" selected><?= $d['kode_penyakit']; ?> || <?= $d['nama_penyakit']; ?></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Gejala :</label>
                                                    <select name="gejala" class="form-control" id="input-ame" placeholder="isikan penyakit" required autofocus>
                                                        <?php
                                                        $sql = mysqli_query($conn, "SELECT * FROM gejala");
                                                        while ($p = mysqli_fetch_array($sql)) {
                                                        ?>
                                                            <option value="<?= $p['kode_gejala']; ?>" selected><?= $p['kode_gejala']; ?> || <?= $p['gejala']; ?></option>
                                                            <?php } ?>
                                                            <option value="<?= $d['kode_gejala']; ?>" selected><?= $d['kode_gejala']; ?> || <?= $d['gejala']; ?></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">MB :</label>
                                                    <input type="text" name="mb" class="form-control" id="input-ame" value="<?= $d['mb']; ?>" placeholder="isikan MB" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">MD :</label>
                                                    <input type="text" name="md" class="form-control" id="input-ame" value="<?= $d['md']; ?>" placeholder="isikan MD" required autofocus>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="submit" class="btn btn-info">Edit</button>
                                                </div>
                                        </form>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengetahuan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="module/pengetahuan/delete" method="post" enctype="multipart/form-data" role="form">
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