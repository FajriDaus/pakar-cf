<?php 
include '../../../config/config.php';

$name = $_POST['nama'];
$uname = $_POST['username'];
$det = $_POST['keterangan'];
$pass = $_POST['password'];
$confirm = $_POST['confirm'];

$pass = md5($pass);

    if($pass !== $confirm)
    {
        echo "<script>alert('password tidak sama');
        document.location.href =  '../../user'</script>";
    }

    mysqli_query($conn, "INSERT INTO users VALUES ('', '$name', '$uname', '$pass', '$det')");

    header('location:../../user');
