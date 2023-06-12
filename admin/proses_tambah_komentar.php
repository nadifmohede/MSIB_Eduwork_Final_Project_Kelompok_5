<?php
    $id_film = $_POST['id_film'];
    $id_reviewer = $_POST['id_reviewer'];
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `koemntar` (`id_film`, `id_reviewer`,`rating`,`komentar`) VALUES ('$id_film', '$id_reviewer', '$rating','$komentar'); ");

    header("Location: data_komentar.php");
?>