<?php

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    include "../config/config.php";
    $username = input($_POST["username"]);
    $p = input(md5($_POST["password"]));
    $url = BASE_URL;

    $sql = "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $p . "' limit 1";
    $hasil = mysqli_query($conn, $sql);
    $jumlah = mysqli_num_rows($hasil);

    if ($jumlah > 0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["id"] = $row["id"];
        $_SESSION["nama"] = $row["nama"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["keterangan"] = $row["keterangan"];
        $_SESSION['status'] = "login";
            header('Location: ../admin/');
    } else if (!$jumlah) {
        echo "<script> alert('Username atau Password salah.');window.location='../signin'
      </script>";
    }
}
