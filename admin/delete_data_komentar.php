<?php
    include('../database/koneksi.php');

    $id_komentar = $_GET['id_komentar'];

    $result = mysqli_query($koneksi, "DELETE FROM komentar WHERE id_komentar = '$id_komentar' ");
   
    header("Location: data_komentar.php");
?>