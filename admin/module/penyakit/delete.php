<?php 
include '../../../config/config.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM penyakit WHERE id = '$id'");

header('location:../../penyakit');