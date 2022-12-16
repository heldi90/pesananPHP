<?php
    include '../Koneksi/koneksi.php';


    $email = $_POST['email'];
    $password = $_POST['pass']


    $users = mysqli_query($koneksi, "SELECT * from user");

    foreach ($users as $row){
       if ($row['email'] == $email  && $row['password'] == $password) {
        $namauser = $row['username'];
        header("location:registrasi.php?user=$namauser");
       } else {
        
       }
    }
    ?>