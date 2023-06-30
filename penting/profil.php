
<?php

include "koneksi.php";
$q2 = mysqli_query($koneksi,"SELECT * FROM pro1 WHERE id_pro1='1'");
$e2 = mysqli_fetch_array($q2);
$q3 = mysqli_query($koneksi,"SELECT * FROM sd WHERE id_sd='1'");
$e3 = mysqli_fetch_array($q3);
$q4 = mysqli_query($koneksi,"SELECT * FROM smp WHERE id_smp='1'");
$e4 = mysqli_fetch_array($q4);
$q5 = mysqli_query($koneksi,"SELECT * FROM smk WHERE id_smk='3'");
$e5 = mysqli_fetch_array($q5);
$q6 = mysqli_query($koneksi,"SELECT * FROM prestasi WHERE id_prestasi='1'");
$e6 = mysqli_fetch_array($q6);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="profil">
    <div class="header">
        <div class="judul">
    <h2>About Me</h2>
        </div>
    </div>
<nav class="navigation">
        <ul>
            <li><a class="t" href="tubuh.php">Home</a></li>
            <li><a class="g" href="galery.php">Galery</a></li>
            <li><a class="s" href="skill.php">Skill</a></li>
            <li><a class="k" href="keterangan.php">Keterangan</a></li>
        </ul>
    </nav>
    </div>
    <div class="edit">
        <a href=""></a>
    </div>
    <h2>About Me</h2>
    <hr>
   <div class="nama"> </div>
   <div class="isi">  <?php echo $e2['pro1'] ?></div>

    <div class="pendidikan">
   <h2>Pendidikan</h2>
   </div>
    <hr>
 <div class="sekolah">
 <img class="img1" src="gambar/sd.jpg">
   <div class="sd"> <?php echo $e3['sd']?></div>
   <img class="img2" src="gambar/2.jpg">
   <div class="smp"> <?php echo $e4['smp']?></div>
   <img class="img3" src="gambar/smk.jpg">
   <div  class="smk"> <?php echo $e5['smk']?></div>
   </div>

   <div class="iya">
   <div class="pretasi">
   <h2>Pretasi</h2>
   </div>
   <hr>
   <div  class="tulisan"> <?php echo $e6['prestasi']?></div>
   </div>
</body>
</html>