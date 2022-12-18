<?php 

include '../Koneksi/koneksi.php';

session_start();
// menyimpan data kedalam variabel
$id   = $_SESSION['id'];

$username       = $_POST['username'];
$email          = $_POST['email'];
$pass           = $_POST['pass'];
$pass2          = $_POST['pass2'];
$deskripsi      = $_POST['desk'];

if ($pass == $pass2) {
    // query SQL untuk insert data
    $query="UPDATE user SET username='$username',email='$email',password ='$pass',deskripsi='$deskripsi' where id='$id'";
    mysqli_query($koneksi, $query);

    // set session
    $users = mysqli_query($koneksi, "SELECT * FROM user");

    while($d = mysqli_fetch_array($users)) {
        if($d['id'] == $id) {
            $username = $d['username'];
            $_SESSION["id"] = $d['id'];
            $_SESSION["username"] = $d['username'];
            $_SESSION["email"] = $d['email'];
            $_SESSION["password"] = $d['password'];
            $_SESSION["deskripsi"] = $d['deskripsi'];
            header("location:../user.php");
    }

}
    


    // mengalihkan ke halaman index.php
    
   

  }else {
    $salah = "Password Tidak Sama";
    header("location:edit.php?sal=$salah");
  }


?>