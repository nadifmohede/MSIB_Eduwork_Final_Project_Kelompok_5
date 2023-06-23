<?php
    include('../database/koneksi.php');

    $id_aktor = $_GET['id_aktor'];

    $result = mysqli_query($koneksi, "DELETE FROM aktor WHERE id_aktor = '$id_aktor' ");
   
    header("Location: data_aktor.php");
?>