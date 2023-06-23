<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai rating dan isi komentar dari form
    $rating = $_POST['rating'];
    $isi_komentar = $_POST['isi_komentar'];


    // Ambil ID film dari parameter URL
    $id_film = $_GET['id_film'];
    

    // Ambil ID pengguna dari sesi
    $id_reviewer = 7;

    // Lakukan koneksi ke database dan query INSERT untuk menyimpan data
    $koneksi = mysqli_connect("localhost", "root", "", "film");
    $query = "INSERT INTO `komentar` (`id_film`, `id_reviewer`, `isi_komentar`, `rating`) VALUES ('$id_film', '$id_reviewer', '$isi_komentar', '$rating')";
    //$result = mysqli_query($koneksi, "INSERT INTO `komentar` (`id_film`, `id_reviewer`,`rating`,`isi_komentar`) VALUES ('$id_film', '$id_reviewer', '$rating','$isi_komentar'); ");
    $result = mysqli_query($koneksi, $query);
    mysqli_close($koneksi);

    if ($result) {
        // Data berhasil disimpan
        header("Location: ../moviesingle.php?id_film=$id_film");
        exit();
    } else {
        // Terjadi kesalahan saat menyimpan data
        echo "Terjadi kesalahan saat menyimpan data.";
    }
}
?>
