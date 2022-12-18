<?php 
include '../Koneksi/koneksi.php';
session_start();
$id = $_SESSION['id'];
var_dump($id);
$query = "DELETE FROM user WHERE id='$id'";
mysqli_query($koneksi, $query);
$hapus = "Data sudah dihapus.";
session_destroy();
header("location:../halaman/login.php?gagal=$hapus");
?>