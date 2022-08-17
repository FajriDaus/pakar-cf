<?php

session_start();

if ($_SESSION["status"] != 'login') {
    //Jangan menampilkan data yang dilindungi, kembali ke halaman login
    header('Location:../signin ');
}

include 'head.php';

?>



<title>Dashboard | Post</title>
<!-- <script src="vendor/ckeditor5-build-classic/ckeditor.js"></script> -->
<script src="vendor/ckeditor5/build/ckeditor.js"></script>

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
                                            <th>Nama Post</th>
                                            <th>Detail Post</th>
                                            <th>Saran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot style="border-top: #37393b;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Post</th>
                                            <th>Detail Post</th>
                                            <th>Saran</th>
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


                                            $query = "SELECT * FROM post";
                                            $sql = mysqli_query($conn, $query);
                                            $bil = $firstPage + 1;
                                            $d = mysqli_num_rows($sql);
                                            $pages = ceil($d / $edge);

                                            $datatable = mysqli_query($conn, "SELECT * FROM post");

                                            while ($d = mysqli_fetch_array($datatable)) {
                                            ?>
                                        <tr>
                                            <td><?= $bil++; ?></td>
                                            <td><?= strip_tags($d['nama']); ?></td>
                                            <td><?= strip_tags($d['detail']); ?></td>
                                            <td><?= strip_tags($d['saran']); ?></td>
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Post</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="module/post/add" method="post" enctype="multipart/form-data" role="form">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Nama Post :</label>
                                                                <textarea type="text" name="nama" class="form-control" placeholder="Nama Post"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Detail Post :</label>
                                                                <textarea type="text" name="detail" id="tiny1" class="form-control" placeholder="Detail Post"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Saran :</label>
                                                                <textarea type="text" name="saran" id="tiny2" class="form-control" placeholder="Saran Post"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Gambar :</label>
                                                                <input type="file" name="gambar" class="form-control">
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Post</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="module/post/edit" method="post" enctype="multipart/form-data" role="form">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Nama Post :</label>
                                                                <input type="hidden" name="id" class="form-control" id="input-ame" value="<?= $d['id']; ?>">
                                                                <textarea type="text" name="nama" class="form-control" placeholder="Nama Post"><?= $d['nama']; ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Detail Post :</label>
                                                                <textarea type="text" name="detail" id="tiny4<?= $d['id']; ?>" class="form-control" placeholder="Detail Post"><?= $d['detail']; ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Saran :</label>
                                                                <textarea type="text" name="saran" id="tiny5<?= $d['id']; ?>" class="form-control" placeholder="Saran Post"><?= $d['saran']; ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Gambar :</label>
                                                                <input type="file" name="gambar" class="form-control">
                                                                <img id='preview' src='../gambar/post/<?= $d['gambar'] ?>' width=200 style="border: 5px solid #555;">
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

                            <script>
                                ClassicEditor.create(document.querySelector('#tiny4<?= $d['id']; ?>'), {
                                    alignment: {
                                        options: ['left', 'right', 'center', 'justify']
                                    },
                                    toolbar: [
                                        'heading', 'bold', 'italic', 'underline', 'strikethrough', 'code','subscript', 'superscript', '|', 'bulletedList', 'numberedList', 'alignment', 'undo', 'redo'
                                    ]
                                });
                                ClassicEditor.create(document.querySelector('#tiny5<?= $d['id']; ?>'), {
                                    alignment: {
                                        options: ['left', 'right', 'center', 'justify']
                                    },
                                    toolbar: [
                                        'heading', 'bold', 'italic', 'underline', 'strikethrough', 'code','subscript', 'superscript', '|', 'bulletedList', 'numberedList', 'alignment', 'undo', 'redo'
                                    ]
                                });
                            </script>

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
                                        <form action="module/post/delete" method="post" enctype="multipart/form-data" role="form">
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

    <script>
        ClassicEditor.create(document.querySelector('#tiny1'), {
            alignment: {
                options: ['left', 'right', 'center', 'justify']
            },
            toolbar: [
                'heading', 'bold', 'italic', 'underline', 'strikethrough', 'code','subscript', 'superscript', '|', 'bulletedList', 'numberedList', 'alignment', 'undo', 'redo'
            ]
        });
        ClassicEditor.create(document.querySelector('#tiny2'), {
            alignment: {
                options: ['left', 'right', 'center', 'justify']
            },
            toolbar: [
                'heading', 'bold', 'italic', 'underline', 'strikethrough', 'code','subscript', 'superscript', '|', 'bulletedList', 'numberedList', 'alignment', 'undo', 'redo'
            ]
        });
    </script>


    <?php include 'footer.php' ?>