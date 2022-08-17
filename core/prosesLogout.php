<?php 

require_once '../config/config.php';

session_start();

session_unset();

session_destroy();

header("Location: ../signin");

if($_SESSION["status"] != 'login')
{
    //Do not show protected data, redirect to login...
    header('Location: ../');
}