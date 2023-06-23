<?php
require_once("../database/koneksi.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['username'] === $username && $row['password'] === $password) {
      $_SESSION['username'] = $row['username'];
      if ($row['level'] === "admin") {
        header("Location: ../admin/index-admin.php");
      } else if ($row['level'] === "user") {
        header("Location: ../index.php");
      }
    }
  } else {
    header("location:../index.php?error=password atau username salah");
  }
}
