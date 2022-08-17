<?php
include '../../../config/config.php';

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$det = $_POST['det'];
$saran = $_POST['saran'];
$gambar = $_FILES['gambar']['name'];

if ($gambar) {
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../gambar/penyakit/" . $_FILES['gambar']['name']);
    mysqli_query($conn, "UPDATE penyakit SET
                  kode_penyakit = '$kode',
                  nama_penyakit = '$nama',
                  det_penyakit = '$det',
                  srn_penyakit = '$saran',
                  img = '$gambar
             WHERE id = '$id'");
} else {
    mysqli_query($conn, "UPDATE penyakit SET
    kode_penyakit = '$kode',
    nama_penyakit = '$nama',
    det_penyakit = '$det',
    srn_penyakit = '$saran'
WHERE id = '$id'");
}
header('location:../../penyakit');
