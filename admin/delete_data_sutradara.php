<?php
    include('../database/koneksi.php');

    $id_sutradara = $_GET['id_sutradara'];

    $result = mysqli_query($koneksi, "DELETE FROM sutradara WHERE id_sutradara = '$id_sutradara' ");
   
    header("Location: data_sutradara.php");
?>