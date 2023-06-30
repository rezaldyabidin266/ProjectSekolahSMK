<?php
    include "koneksi.php";
    $q7 = mysqli_query($koneksi,"SELECT * FROM pengalaman WHERE id_pengalaman='1'");
    $e7 = mysqli_fetch_array($q7);
    $q8 = mysqli_query($koneksi,"SELECT * FROM hobby WHERE id_hobby='1'");
    $e8 = mysqli_fetch_array($q8);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keterangan</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

    <div class="profil">
    <div class="header">
        <div class="judul">
    <h3>Keterangan</h3>
        </div>
    </div>
<nav class="navigation">
        <ul>
            <li><a class="t" href="tubuh.php">Home</a></li>
            <li><a class="g" href="profil.php">About Me</a></li>
            <li><a class="g" href="galery.php">Galery</a></li>
            <li><a class="s" href="skill.php">Skill</a></li>
        </ul>
    </nav>
    </div>

    <div class="edit">
        <a href=""></a>
    </div>
 
    <h2>Pengalaman</h2>
    <hr>

    
    
    <div class="pengalaman"><?php echo $e7['pengalaman']?> </div>

    <div class="hobby">
    <h2 >hobby</h2>
    <hr>

    <img src="gambar/volly.png"> 
    <div class="volly"><?php echo $e8['hobby']?></div>
    </div>

</body>
</html>

