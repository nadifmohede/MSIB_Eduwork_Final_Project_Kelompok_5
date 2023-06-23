<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    

    $id_rating = $_POST['id_rating'];
    $id_film = $_POST['id_film'];
    $id_reviewer = $_POST['id_reviewer'];
    $nilai_rating = $_POST['nilai_rating'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE rating SET id_film = '$id_film', id_reviewer = '$id_reviewer', nilai_rating = '$nilai_rating'  WHERE id_rating = '$id_rating' ");

    header("Location: data_rating.php");
?>