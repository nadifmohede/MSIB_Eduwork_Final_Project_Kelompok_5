<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id_aktor = $_POST['id_aktor'];
    $nama_aktor = $_POST['nama_aktor'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $negara_asal = $_POST['negara_asal'];
    $biografi = $_POST['biografi'];
    $file_gambar = $_POST['file_gambar'];


    include('../database/koneksi.php');

    // Ambil Data yang Dikirim dari Form upload
    $nama_file = $_FILES['file_gambar']['name'];
    // Ambil url path folder
    $tmp_file = $_FILES['file_gambar']['tmp_name'];
        
    // Set path folder tempat menyimpan gambarnya
    $path = "../images/aktor/".$file_gambar;
    $target_file = $path . basename($aktor['name']); // nama file
    move_uploaded_file($gambar["tmp_name"], $target_file); // simpan file ke folder
    
    $result = mysqli_query($koneksi, "UPDATE aktor SET nama_aktor = '$nama_aktor', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', negara_asal = '$negara_asal', biografi = '$biografi', file_gambar = '$file_gambar' WHERE id_aktor = '$id_aktor' ");

    header("Location: data_aktor.php");
?>