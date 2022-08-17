<?php

session_start();

if ($_SESSION["status"] != 'login') {
    //Jangan menampilkan data yang dilindungi, kembali ke halaman login
    header('Location:../signin ');
}

include 'head.php';

?>



<title>Dashboard | User Admin</title>

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
                            <?php if($_SESSION["keterangan"] == "Admin"){ ?>
                            <button class="btn btn-primary" onclick="$('#modalAddUsers').modal('show');" type="button" data-target="#modalAddUsers" data-toggle="modal" data-whatever="@getbootstrap">Tambah Data</button>
                            <?php } ?>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <label for="search">Search :</label>
                                <input class="border rounded bg-light sm mb-4 col-xs-2" type="text" id="search" onkeyup="searchTable()">
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Keterangan</th>
                                            <?php if($_SESSION["keterangan"] == "Admin"){ ?>
                                            <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tfoot style="border-top: #37393b;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Keterangan</th>
                                            <?php if($_SESSION["keterangan"] == "Admin"){ ?>
                                            <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $edge = 5;
                                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                            $firstPage = ($page > 1) ? ($page * $edge) - $edge : 0;

                                            $previous = $page - 1;
                                            $next = $page + 1;


                                            $query = "SELECT * FROM users";
                                            $sql = mysqli_query($conn, $query);
                                            $bil = $firstPage + 1;
                                            $d = mysqli_num_rows($sql);
                                            $pages = ceil($d / $edge);

                                            $datatable = mysqli_query($conn, "SELECT * FROM users LIMIT $firstPage, $edge");


                                            while ($d = mysqli_fetch_array($datatable)) {

                                            ?>
                                        <tr>
                                            <td><?= $bil++; ?></td>
                                            <td><?= $d['nama']; ?></td>
                                            <td><?= $d['username']; ?></td>
                                            <td><?= $d['keterangan']; ?></td>
                                            <?php if($_SESSION["keterangan"] == "Admin"){ ?>
                                            <td>
                                                <!-- <a href="" class='btn btn-secondary btn-sm' type='button' data-target="#modalEditData" data-toggle='modal'>Ubah</a> -->
                                                <button class='btn btn-danger btn-sm' type='button' data-target='#modalHapusData<?= $d['id']; ?>' data-toggle='modal'>Hapus</button>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        </tr>

                                        <!-- Modals -->

                                        <!-- Modal Tambah Data -->
                                        <div class="modal fade" id="modalAddUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="module/user/add" method="post" enctype="multipart/form-data" role="form">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Nama :</label>
                                                                <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Username :</label>
                                                                <input type="text" name="username" class="form-control" id="input-ame" placeholder="isikan username anda" required autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Level :</label>
                                                                <select class="form-select" name="keterangan" aria-label="Default select example" placeholder="isi">
                                                                    <option value="Pakar">Pakar</option>
                                                                    <option value="Admin">Admin</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-placeholder" for="password">Password :</label>
                                                                <input type="password" name="password" class="form-control form-control-user" id="password1" placeholder="isikan password anda" required>
                                                                <div class="form-group float-end form-switch">
                                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="showPass();">
                                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Tampilkan Password</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-placeholder" for="password">Konfirmasikan Password :</label>
                                                                <input type="password" name="confirm" class="form-control form-control-user" id="password2" placeholder="isikan password anda" required>
                                                                <div class="form-group float-end form-switch">
                                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="showPass1();">
                                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Tampilkan Password</label>
                                                                </div>
                                                            </div><br>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="module/user/edit" method="post" enctype="multipart/form-data" role="form">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama :</label>
                                                    <input type="hidden" name="id" class="form-control" id="input-ame" value="<?php echo $d['id'] ?>" required autofocus>
                                                    <input type="text" name="nama" class="form-control" id="input-ame" value="<?php echo $d['nama'] ?>" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Username :</label>
                                                    <input type="text" name="username" class="form-control" id="input-ame" value="<?= $d['username']; ?>" placeholder="isikan username anda" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Level :</label>
                                                    <select class="form-select" name="keterangan" aria-label="Default select example" placeholder="isi">
                                                        <option value="Pakar" <?php if ($d['keterangan'] = 'Pakar') {
                                                                                    echo 'selected';
                                                                                } ?>>Pakar</option>
                                                        <option value="Admin" <?php if ($d['keterangan'] = 'Admin') {
                                                                                    echo 'selected';
                                                                                } ?>>Admin</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-info">Simpan</button>
                                                </div>
                                        </form>
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
                                    <form action="module/user/delete" method="post" enctype="multipart/form-data" role="form">
                                        <div class="modal-body">
                                        <input type="hidden" name="id" class="form-control" id="input-ame" value="<?php echo $d['id'] ?>" required autofocus>
                                            <p><strong>Anda Yakin Ingin Menghapus Data Ini ?</strong></p>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">Batal</button>
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



    <!-- Script Tampilkan Password -->
    <script>
        function showPass() {
            var x = document.getElementById("password1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script>
        function showPass1() {
            var y = document.getElementById("password2");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>
    <!-- Akhir Script Tampilkan Password -->


    <?php include 'footer.php' ?>