<?php
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $level = $_POST['level'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE user SET username = '$username', password = '$password', nama = '$nama', level = '$level' WHERE id_user = '$id_user' ");

    header("Location: data_sutradara.php");
?>