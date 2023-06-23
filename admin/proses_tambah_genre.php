<?php
    $judul_genre = $_POST['judul_genre'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `genre` (`judul_genre`) VALUES ('$judul_genre'); ");

    header("Location: data_genre.php");
?>