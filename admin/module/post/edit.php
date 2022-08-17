<?php
include '../../../config/config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$det = $_POST['detail'];
$saran = $_POST['saran'];
$gambar = $_FILES['gambar']['name'];

if ($gambar) {
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../gambar/post/" . $_FILES['gambar']['name']);
    mysqli_query($conn, "UPDATE post SET
                  nama = '$nama',
                  detail = '$det',
                  saran = '$saran',
                  gambar = '$gambar
             WHERE id = '$id'");
} else {
    mysqli_query($conn, "UPDATE post SET
    nama = '$nama',
    detail = '$det',
    saran = '$saran'
WHERE id = '$id'");
}
header('location:../../post');
