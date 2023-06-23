<?php
    include('../database/koneksi.php');

    $id_pemeran = $_GET['id_pemeran'];

    $result = mysqli_query($koneksi, "DELETE FROM pemeran WHERE id_pemeran = '$id_pemeran' ");
   
    header("Location: data_pemeran.php");
?>