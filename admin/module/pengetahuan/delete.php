<?php 
include '../../../config/config.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM pengetahuan WHERE id = '$id'");

header('location:../../pengetahuan');