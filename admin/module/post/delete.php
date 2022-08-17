<?php 
include '../../../config/config.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM post WHERE id = '$id'");

header('location:../../post');