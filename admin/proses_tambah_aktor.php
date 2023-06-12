<?php
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
    $target_file = $path . basename($aktor["name"]); // nama file
    move_uploaded_file($gambar["tmp_name"], $target_file); // simpan file ke folder
    

    $result = mysqli_query($koneksi, "INSERT INTO `aktor` (`nama_aktor`,`tanggal_lahir`,`jenis_kelamin`,`negara_asal`,`biografi`,`file_gambar`) VALUES ('$nama_aktor','$tanggal_lahir', '$jenis_kelamin','$negara_asal','$biografi','$file_gambar'); ");

    header("Location: data_aktor.php");
?>