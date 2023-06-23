<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id_sutradara = $_POST['id_sutradara'];
    $id_genre = $_POST['id_genre'];
    $judul_film = $_POST['judul_film'];
    $sinopsis = $_POST['sinopsis'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $durasi_film = $_POST['durasi_film'];

    include('../database/koneksi.php');

    $nama_file = $_FILES['file_poster']['name'];
    $tmp_file = $_FILES['file_poster']['tmp_name'];

    // Set path folder tempat menyimpan gambarnya
    $path = "../images/poster/";
    $target_file = $path . basename($nama_file);

    // Periksa izin tulis pada folder tujuan
    if (is_writable($path)) {
        // Pindahkan file ke folder tujuan
        if (move_uploaded_file($tmp_file, $target_file)) {
            // Ubah format tanggal
            $tanggal_rilis_formatted = date('Y-m-d', strtotime($tanggal_rilis));

            // Lakukan query INSERT
            $result = mysqli_query($koneksi, "INSERT INTO `film` (`id_sutradara`,`id_genre`,`judul_film`,`sinopsis`,`tahun_rilis`,`tanggal_rilis`,`durasi_film`,`file_poster`) VALUES ('$id_sutradara','$id_genre','$judul_film','$sinopsis','$tahun_rilis','$tanggal_rilis_formatted','$durasi_film','$nama_file');");

            if ($result) {
                header("Location: data_film.php");
                exit;
            } else {
                echo "Error: " . mysqli_error($koneksi);
                exit;
            }
        } else {
            echo "Error moving uploaded file";
            exit;
        }
    } else {
        echo "Folder destination is not writable";
        exit;
    }
?>
