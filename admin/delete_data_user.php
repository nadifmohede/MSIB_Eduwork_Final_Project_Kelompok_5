<?php
    include('../database/koneksi.php');

    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM users WHERE id = '$id' ");
   
    header("Location: data_user.php");
?>