<?php
    include "koneksi.php";
    $q1 = mysqli_query($koneksi,"SELECT * FROM nama WHERE id='1'");
    $edit1 = mysqli_fetch_array($q1);
    $h3 = mysqli_query($koneksi,"SELECT * FROM alamat WHERE id_alamat='1'");
    $e3 = mysqli_fetch_array($h3);
    $h4 = mysqli_query($koneksi,"SELECT * FROM telepon WHERE id_telepon='5'");
    $e4 = mysqli_fetch_array($h4);
    $h5 = mysqli_query($koneksi,"SELECT * FROM email WHERE id_email='4'");
    $e5 = mysqli_fetch_array($h5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="contener">
    <div class="header">
        <div class="judul">
    <h2>Portfolio</h2>
</div>
    <div class="fotoprofil">
        <img src="gambar/foto.jpg">
        </div>
    <div class="biodata">
    <div class="satu">
       <img src="gambar/profil.png"></img>
        <h4><?php echo  $edit1['username']?></h4>
    </div>
        <div class="dua">
        <img src="gambar/home.png"></img>
        <h4><?php echo  $e3['alamat']?></h4></div>
        <div class="tiga">
         <img src="gambar/email.png"></img>
        <h4><?php echo  $e5['email']?></h4>
        </div>
    <div class="empat">
         <img src="gambar/kontak.png"></img>
        <h4><?php echo  $e4['telepon']?></h4>
    </div>
    </div>
</div>
    <nav class="navigation">
        <ul>
            <li><a class="p" href="profil.php">About Me</a></li>
            <li><a class="g" href="galery.php">Galery</a></li>
            <li><a class="s" href="skill.php">Skill</a></li>
            <li><a class="k" href="keterangan.php">Keterangan</a></li>
        </ul>
    </nav>
</div>

<div class="tombol">
    <a href="login.php" >login</a>
</div>


<footer>
    <p>&copy; copyright 2019</p>
</footer>
</body>
</html>

