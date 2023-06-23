<?php
    $id_user = $_POST['id_user'];
    $nama_reviewer = $_POST['nama_reviewer'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `reviewer` (`id_user`, `nama_reviewer`) VALUES ('$id_user', '$nama_reviewer'); ");

    header("Location: data_reviewer.php");
?>