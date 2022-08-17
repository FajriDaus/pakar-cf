<?php
include '../../../config/config.php';

$penyakit = $_POST['penyakit'];
$gejala = $_POST['gejala'];
$mb = $_POST['mb'];
$md = $_POST['md'];

mysqli_query($conn, "INSERT INTO pengetahuan(id,kode_penyakit,kode_gejala,mb,md) VALUES ('','$penyakit','$gejala','$mb','$md')");
header('location: ../../pengetahuan');