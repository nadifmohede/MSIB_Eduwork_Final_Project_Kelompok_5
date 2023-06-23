<?php
    $id_genre = $_POST['id_genre'];
    $judul_genre = $_POST['judul_genre'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE genre SET judul_genre = '$judul_genre' WHERE id_genre = '$id_genre' ");

    header("Location: data_genre.php");
?>