<?php

include "koneksi.php";
$i1 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='9'");//1
$g1 = mysqli_fetch_array($i1);
$i2 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='10'");//2
$g2 = mysqli_fetch_array($i2);
$i3 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='11'");//3
$g3 = mysqli_fetch_array($i3);
$i4 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='12'");//4
$g4 = mysqli_fetch_array($i4);
$i5 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='13'");//5
$g5 = mysqli_fetch_array($i5);
$i6 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='14'");//6
$g6 = mysqli_fetch_array($i6);
$i7 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='15'");//7
$g7 = mysqli_fetch_array($i7);
$i8 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='16'");//8
$g8 = mysqli_fetch_array($i8);
$i9 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='17'");//9
$g9 = mysqli_fetch_array($i9);
$i10 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='18'");//10
$g10 = mysqli_fetch_array($i10);
$i11 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='19'");//11
$g11 = mysqli_fetch_array($i11);
$i12 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='20'");//12
$g12 = mysqli_fetch_array($i12);
$i13 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='21'");//13
$g13 = mysqli_fetch_array($i13);
$i14 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='22'");//14
$g14 = mysqli_fetch_array($i14);
$i15 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='23'");//15
$g15 = mysqli_fetch_array($i15);
$i16 = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1='24'");//16
$g16 = mysqli_fetch_array($i16);
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profil</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="profil">
    <div class="header">
        <div class="judul">
    <h2>Galery</h2>
        </div>
    </div>
<nav class="navigation">
        <ul>
            <li><a class="t" href="tubuh.php">Home</a></li>
            <li><a class="g" href="profil.php">About Me</a></li>
            <li><a class="s" href="skill.php">Skill</a></li>
            <li><a class="k" href="keterangan.php">Keterangan</a></li>
        </ul>
    </nav>
    </div>
    <div class="edit">
        <a href="galeryedit.php"></a>
    </div>
    <?php

    ?>
    <div class="main">
    <img src="uploads/<?php echo $g1['file']?>">
    <img src="uploads/<?php echo $g2['file']?>">
    <img src="uploads/<?php echo $g14['file']?>">
    <img src="uploads/<?php echo $g3['file']?>">
    <img src="uploads/<?php echo $g5['file']?>">
    <img src="uploads/<?php echo $g6['file']?>">
    <img src="uploads/<?php echo $g7['file']?>">
    <img src="uploads/<?php echo $g8['file']?>">
    <img src="uploads/<?php echo $g9['file']?>">
    <img src="uploads/<?php echo $g10['file']?>">
    <img src="uploads/<?php echo $g11['file']?>">
    <img src="uploads/<?php echo $g12['file']?>">
    </div>


</body>
</html>