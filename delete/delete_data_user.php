<?php
    include('../database/koneksi.php');

    $id_user = $_GET['id_user'];

    $result = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id_user' ");
   
    header("Location: data_user.php");
?>