<?php

session_start();
include "koneksi.php";
$user = $_POST ['user'];
$password = $_POST ['password'];

$login = mysqli_query($koneksi,"select * from login where user='$user' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data ['level'] == "admin"){

        $_SESSION['user'] = $user;
        $_SESSION['level'] = "admin";

        header("location:edit.php");

    }
    else{
        header("location:login.php?pesan=gagal");

    }
}else{
        header("location:login.php?pesan=gagal");

    }



?>