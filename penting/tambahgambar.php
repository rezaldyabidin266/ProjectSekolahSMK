<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    session_start();
    
    if($_SESSION['level']==""){
        header("location:login.php?pesan=gagal");
    }
    ?>
    <form method="POST" action="" enctype="multipart/form-data">
    <table>
    <a href="edit.php">Data </a>
    <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama"/></td>
    </tr>
    <tr>
        <td>file</td>
        <td>:</td>
        <td><input type="file" name="gambar"/></td>
    </tr>
    <tr>
        <td></td>
        <td>:</td>
        <td><input type="submit" name="kirim" value="kirim"/></td>
    </tr>

    
    </table>
    </form>

<?php

if (isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = './uploads/';

    move_uploaded_file($source,$folder.$nama_file);

    $insert = mysqli_query($koneksi,"INSERT INTO tb_gambar1 VALUES (
       NULL ,'$nama','$nama_file')");
    
    if($insert){ 
        echo ' berhasil upload';

    }else{

        echo 'gagal upload';

    }


}

?>

</body>
</html>
