<?php 
session_start();
session_destroy();
$hapus = "Anda Telah LogOut !";
header("location:../halaman/login.php?gagal=$hapus");
?>