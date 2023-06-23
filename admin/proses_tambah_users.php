<?php
    $nama = $_POST['nama'];
    $level = $_POST['level'];
    $username = $_POST['username'];
    $kata_sandi = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password'];


    include('../database/koneksi.php');

    if ($kata_sandi == $konfirmasi_password) {

    
        // Menggunakan password_hash() untuk mengacak password
         $hashed_password1 = password_hash($kata_sandi, PASSWORD_DEFAULT);
         $hashed_password2 = password_hash($konfirmasi_password, PASSWORD_DEFAULT);

         $result = mysqli_query($koneksi, "INSERT INTO `users` (`nama`, `level`, `username`, `password`, `confirm_password`) VALUES ('$nama', '$level', '$username', '$hashed_password1', '$hashed_password2')");

         if ($result) {
             header("Location: data_user.php");
         } else {
             echo "Error: " . mysqli_error($koneksi);
         }
        }
    
//} else {
    //     header("Location: tambah_user.php?pesan=password_tidak_cocok");
    //}
?>