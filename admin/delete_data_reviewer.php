<?php
    include('../database/koneksi.php');

    $id_reviewer = $_GET['id_reviewer'];

    $result = mysqli_query($koneksi, "DELETE FROM reviewer WHERE id_reviewer = '$id_reviewer' ");
   
    header("Location: data_reviewer.php");
?>