<?php
  require_once("../database/koneksi.php");
  session_start();

  if($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($koneksi, $sql);

    if($result === TRUE){
      header("Location: ../index.php");
    }
  }
