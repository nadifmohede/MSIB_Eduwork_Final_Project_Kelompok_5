<?php
    $id_komentar = $_POST['id_komentar'];
    $id_film = $_POST['id_film'];
    $id_reviewer = $_POST['id_reviewer'];
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE komentar SET id_film = '$id_film', id_reviewer = '$id_reviewer', rating = '$rating', komentar = '$komentar' WHERE id_komentar = '$id_komentar' ");

    header("Location: data_komentar.php");
?>