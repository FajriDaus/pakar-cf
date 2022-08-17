<?php 
include '../../../config/config.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM gejala WHERE id = '$id'");

header('location:../../gejala');