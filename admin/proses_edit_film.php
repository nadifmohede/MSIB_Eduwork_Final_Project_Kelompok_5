<?php
    $id_film = $_POST['id_film'];
    $id_sutradara = $_POST['id_sutradara'];
    $id_genre = $_POST['id_genre'];
    $judul_film = $_POST['judul_film'];
    $sinopsis = $_POST['sinopsis'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $durasi_film = $_POST['durasi_film'];
    $rating_umur = $_POST['rating_umur'];
    $file_poster = $_POST['file_poster'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE film SET id_sutradara = '$id_sutradara', id_genre = '$id_genre', judul_film = '$judul_film', sinopsis = '$sinopsis', tahun_rilis = '$tahun_rilis', tanggal_rilis = '$tanggal_rilis', durasi_film = '$durasi_film', rating_umur = '$rating_umur', file_poster = '$file_poster' WHERE id_film = '$id_film' ");

    header("Location: data_film.php");
?>