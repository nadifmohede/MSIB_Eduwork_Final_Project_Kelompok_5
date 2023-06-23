<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id_film = $_POST['id_film'];

    include('../database/koneksi.php');

    // Gunakan prepared statement
    $stmt = $koneksi->prepare("INSERT INTO rating (id_film) VALUES (?)");
    $stmt->bind_param("i", $id_film); // Mengikat parameter dengan tipe string

    // Jalankan pernyataan yang telah diikat
    $stmt->execute();

    // Redirect ke halaman data_rating.php
    header("Location: data_rating.php");
?>
