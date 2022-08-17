<?php
include '../../../config/config.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$det = $_POST['det'];
$saran = $_POST['saran'];
$gambar = $_FILES['gambar']['name'];

move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../gambar/penyakit/" . $_FILES['gambar']['name']);
mysqli_query($conn, "INSERT INTO penyakit(id,kode_penyakit,nama_penyakit,det_penyakit,srn_penyakit,img) VALUES ('','$kode','$nama','$det','$saran','$gambar')");

header('location:../../penyakit');