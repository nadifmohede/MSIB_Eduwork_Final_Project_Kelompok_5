<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    $id_sutradara = $_POST['id_sutradara'];
    $id_genre = $_POST['id_genre'];
    $judul_film = $_POST['judul_film'];
    $sinopsis = $_POST['sinopsis'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $durasi_film = $_POST['durasi_film'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `film` (`id_sutradara`,`id_genre`,`judul_film`,`sinopsis`,`tahun_rilis`,`tanggal_rilis`,`durasi_film`) VALUES ('$id_sutradara','$id_genre','$judul_film','$sinopsis','$tahun_rilis','$tanggal_rilis','$durasi_film'); ");

    header("Location: data_film.php");
?>