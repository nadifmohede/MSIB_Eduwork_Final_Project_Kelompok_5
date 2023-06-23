<?php
    $id_reviewer = $_POST['id_reviewer'];
    $id_user = $_POST['id_user'];
    $nama_reviewer = $_POST['nama_reviewer'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE reviewer SET id_user = '$id_user' WHERE id_reviewer = '$id_reviewer' ");

    header("Location: data_reviewer.php");
?>