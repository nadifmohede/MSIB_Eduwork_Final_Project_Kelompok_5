<?php
    include('../database/koneksi.php');

    $id_genre = $_GET['id_genrer'];

    $result = mysqli_query($koneksi, "DELETE FROM genre WHERE id_genre = '$id_genre' ");
   
    header("Location: data_genre.php");
?>