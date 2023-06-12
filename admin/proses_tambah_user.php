<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $level = $_POST['level'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `users` (`username`, `password`,`nama`,`level`) VALUES ('$username', '$password', '$nama', '$level'); ");

    header("Location: data_user.php");
?>