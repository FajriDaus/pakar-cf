<?php
include '../../../config/config.php';

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];

mysqli_query($conn, "UPDATE gejala SET kode_gejala = '$kode', gejala = '$nama' WHERE id = '$id'");
header('location: ../../gejala');