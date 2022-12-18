<?php 
// koneksi database
include '../Koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass1'];
$deskripsi = "Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

if ($pass == $pass2) {
  mysqli_query($koneksi,"insert into user values('','$user','$email','$pass','$deskripsi')");
  $benar = "anda sudah terdaftar!";
// mengalihkan halaman kembali ke index.php
header("location:login.php?benar=$benar");
}else {
  $salah = "Password Tidak Sama";
  header("location:registrasi.php?gagal=$salah");
}
// menginput data ke database

 
?>