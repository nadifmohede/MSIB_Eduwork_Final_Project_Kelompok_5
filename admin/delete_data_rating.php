<?php
    include('../database/koneksi.php');

    $id_rating = $_GET['id_rating'];

    $result = mysqli_query($koneksi, "DELETE FROM rating WHERE id_rating = '$id_rating' ");
   
    header("Location: data_rating.php");
?>