<?php
    $nama_aktor = $_POST['nama_aktor'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `aktor` (`nama_aktor`, `jenis_kelamin`) VALUES ('$nama_aktor', '$jenis_kelamin'); ");

    header("Location: data_aktor.php");
?>