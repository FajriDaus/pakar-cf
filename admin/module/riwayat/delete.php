<?php 
include '../../../config/config.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM riwayat WHERE id = '$id'");

header('location:../../riwayat');