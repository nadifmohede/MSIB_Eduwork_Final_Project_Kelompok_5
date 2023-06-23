<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id_pemeran = $_POST['id_pemeran'];
    $id_aktor = $_POST['id_aktor'];
    $id_film = $_POST['id_film'];
    $peran = $_POST['peran'];

    include('../database/koneksi.php');

    $result = mysqli_query($koneksi, "UPDATE pemeran SET id_aktor = '$id_aktor', id_film = '$id_film', peran = '$peran'  WHERE id_pemeran = '$id_pemeran' ");

    header("Location: data_pemeran.php");
?>