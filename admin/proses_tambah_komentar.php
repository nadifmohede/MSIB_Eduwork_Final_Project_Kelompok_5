<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id_film = $_POST['id_film'];
    $id_reviewer = $_POST['id_reviewer'];
    $rating = $_POST['rating'];
    $isi_komentar = $_POST['isi_komentar'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `komentar` (`id_film`, `id_reviewer`,`rating`,`isi_komentar`) VALUES ('$id_film', '$id_reviewer', '$rating','$isi_komentar'); ");

    header("Location: data_komentar.php");
?>