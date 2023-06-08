<?php
    $nama_sutradara = $_POST['nama_sutradara'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `sutradara` (`nama_sutradara`) VALUES ('$nama_sutradara'); ");

    header("Location: data_sutradara.php");
?>