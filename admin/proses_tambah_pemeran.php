<?php
    $id_aktor = $_POST['id_aktor'];
    $id_film = $_POST['id_film'];
    $peran = $_POST['peran'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "INSERT INTO `sutradara` (`id_aktor`, `id_film`,`peran`) VALUES ('$id_aktor', '$id_film', '$peran'); ");

    header("Location: data_pemeran.php");
?>