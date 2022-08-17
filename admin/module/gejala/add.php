<?php
include '../../../config/config.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];

mysqli_query($conn, "INSERT INTO gejala(id,kode_gejala,gejala) VALUES ('','$kode','$nama')");
header('location: ../../gejala');