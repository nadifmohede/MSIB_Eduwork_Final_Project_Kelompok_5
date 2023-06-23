<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id_aktor = $_POST['id_aktor'];
    $nama_aktor = $_POST['nama_aktor'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $negara_asal = $_POST['negara_asal'];
    $biografi = $_POST['biografi'];
    $file_gambar = $_FILES['file_gambar']['name'];

    include('../database/koneksi.php');

    // Ambil Data yang Dikirim dari Form upload
    $nama_file = $_FILES['file_gambar']['name'];
    // Ambil url path folder
    $tmp_file = $_FILES['file_gambar']['tmp_name'];

    // Set path folder tempat menyimpan gambarnya
    $path = "../images/aktor/";
    $target_file = $path . basename($nama_file); // nama file
    move_uploaded_file($tmp_file, $target_file); // simpan file ke folder

    // Mengubah format tanggal menjadi yyyy-mm-dd
    $tanggal_lahir = date_create_from_format('d-m-Y', $tanggal_lahir);
    $tanggal_lahir = date_format($tanggal_lahir, 'Y-m-d');

    $result = mysqli_query($koneksi, "INSERT INTO `aktor` (`nama_aktor`,`tanggal_lahir`,`jenis_kelamin`,`negara_asal`,`biografi`,`file_gambar`) VALUES ('$nama_aktor','$tanggal_lahir', '$jenis_kelamin','$negara_asal','$biografi','$nama_file'); ");

    header("Location: data_aktor.php");
?>
