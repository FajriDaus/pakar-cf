<?php
include '../../../config/config.php';

$id = $_POST['id'];
$penyakit = $_POST['penyakit'];
$gejala = $_POST['gejala'];
$mb = $_POST['mb'];
$md = $_POST['md'];

mysqli_query($conn, "UPDATE pengetahuan SET kode_penyakit = '$penyakit', kode_gejala = '$gejala', mb = '$mb', md = '$md' WHERE id = '$id'");
header('location: ../../pengetahuan');