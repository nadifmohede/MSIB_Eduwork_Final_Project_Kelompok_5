<?php
    include('../database/koneksi.php');

    $id_film = $_GET['id_film'];

    $result = mysqli_query($koneksi, "DELETE FROM film WHERE id_film = '$id_film' ");
   
    header("Location: data_film.php");
?>