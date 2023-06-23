<?php
    $username_user = $_POST['username'];

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE users SET username = '$username', nama = '$nama', email = '$email' WHERE username = '$username_user' ");

    header("Location: ../index.php");
?>