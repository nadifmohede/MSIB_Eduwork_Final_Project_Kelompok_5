<?php
    $id_film = $_POST['id_film'];
    $id_reviewer = $_POST['id_reviewer'];
    $nilai_rating = $_POST['nilai_rating'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `rating` (`id_film`, `id_reviewer`,`nilai_rating`) VALUES ('$id_film', '$id_reviewer', '$nilai_rating'); ");

    header("Location: data_rating.php");
?>