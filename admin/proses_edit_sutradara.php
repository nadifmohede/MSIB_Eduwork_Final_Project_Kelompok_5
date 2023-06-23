<?php
    $id_sutradara = $_POST['id_sutradara'];
    $nama_sutradara = $_POST['nama_sutradara'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE sutradara SET nama_sutradara = '$nama_sutradara' WHERE id_sutradara = '$id_sutradara' ");

    header("Location: data_sutradara.php");
?>