<?php
include '../../../config/config.php';

$nama = $_POST['nama'];
$det = $_POST['detail'];
$saran = $_POST['saran'];
$gambar = $_FILES['gambar']['name'];

move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../gambar/post/" . $_FILES['gambar']['name']);
mysqli_query($conn, "INSERT INTO post(id,nama,detail,saran,gambar) VALUES ('','$nama','$det','$saran','$gambar')");

header('location:../../post');