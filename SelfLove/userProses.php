<?php
    include '../Koneksi/koneksi.php';
    session_start();

    $email = $_POST['email'];
    $password = $_POST['pass'];


    $users = mysqli_query($koneksi, "SELECT * FROM user");

    while($d = mysqli_fetch_array($users)) {

      if($d['email'] == $email && $d['password'] == $password) {
         $username = $d['username'];
         $_SESSION["id"] = $d['id'];
         $_SESSION["username"] = $d['username'];
         $_SESSION["email"] = $d['email'];
         $_SESSION["password"] = $d['password'];
         $_SESSION["deskripsi"] = $d['deskripsi'];
         header("location:../index.php?nama=$username");

      } else {
         $salah = "Gagal Login! anda belum terdaftar di database";
         header("location:login.php?gagal=$salah");
      }
    }
    ?>