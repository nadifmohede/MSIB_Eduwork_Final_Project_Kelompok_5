<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

require_once('../database/koneksi.php');

$tabel = $_GET['tabel'];
$id = $_GET['id'];


if ($tabel == 'film') {
    $sql = "DELETE FROM $tabel WHERE id_film ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_film.php');
    }
} else if ($tabel == 'genre') {
    $sql = "DELETE FROM $tabel WHERE id_genre ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_genre.php');
    }
} else if ($tabel == 'sutradara') {
    $sql = "DELETE FROM $tabel WHERE id_sutradara ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_sutradara.php');
    }
} else if ($tabel == 'aktor') {
    $sql = "DELETE FROM $tabel WHERE  ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_aktor.php');
    }
} else if ($tabel == 'pemeran') {
    $sql = "DELETE FROM $tabel WHERE  ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_pemeran.php');
    }
} else if ($tabel == 'komentar') {
    $sql = "DELETE FROM $tabel WHERE  ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_komentar.php');
    }
} else if ($tabel == 'rating') {
    $sql = "DELETE FROM $tabel WHERE  ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_rating.php');
    }
} else if ($tabel == 'reviewer') {
    $sql = "DELETE FROM $tabel WHERE  ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_reviewer.php');
    }
} else if ($tabel == 'user') {
    $sql = "DELETE FROM $tabel WHERE  ='$id' ";
    $result = $koneksi->query($sql);
    if ($koneksi->query($sql) == TRUE) {
        header('location: data_user.php');
    }
} else {
    header('location: index-a.php');
}




// var_dump($_GET['buku']);
