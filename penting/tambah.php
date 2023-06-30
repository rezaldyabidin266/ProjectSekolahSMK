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
    
    <form method="POST" >
    <p>
            <label>username</label>
            <input type="text" name="usernama">
        </p>
  
        <p>
            <input type="submit" name="submit" value="simpan">
        </p>
        <p>
        <label>pro1</label>
          <textarea type="text" name="pro1"></textarea>
        </p>
        <input type="submit" name="submit2" value="simpan">

        <p>
            <label>alamat</label>
            <input type="text" name="alamat">
        </p>
  
        <p>
            <input type="submit" name="submit3" value="simpan">
        </p>

        <p>
            <label>telepon</label>
            <input type="text" name="telepon">
        </p>
  
        <p>
            <input type="submit" name="submit4" value="simpan">
        </p>
        <label>email</label>
            <input type="text" name="email">
        </p>
  
        <p>
            <input type="submit" name="submit5" value="simpan">
        </p>
        <label>sd</label>
            <input type="text" name="sd">
        </p>
  
        <p>
            <input type="submit" name="submit6" value="simpan">
        </p>
        <label>smp</label>
            <input type="text" name="smp">
        </p>
  
        <p>
            <input type="submit" name="submit7" value="simpan">
        </p>
        <label>smk</label>
            <input type="text" name="smk">
        </p>
  
        <p>
            <input type="submit" name="submit8" value="simpan">
        </p>

        <p>
        <label>prestasi</label>
          <textarea type="text" name="prestasi"></textarea>
        </p>
        <input type="submit" name="submit9" value="simpan">

        <p>
        <label>pengalaman</label>
          <textarea type="text" name="pengalaman"></textarea>
        </p>
        <input type="submit" name="submit10" value="simpan">
    <br>
        <label>hobby</label>
            <input type="text" name="hobby">
        </p>
  
        <p>
            <input type="submit" name="submit11" value="simpan">
        </p>
    </form>

    <?php

if (isset($_POST['submit'])){
    $usernama= $_POST ['usernama'];

    $tambah= mysqli_query($koneksi,"INSERT INTO nama(id,usernama) VALUES('','$usernama')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}

if (isset($_POST['submit2'])){
    $pro1= $_POST ['pro1'];

    $tambah= mysqli_query($koneksi,"INSERT INTO pro1(id_pro1,pro1) VALUES('','$pro1')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}


    ?>

<?php
if (isset($_POST['submit3'])){
    $alamat= $_POST ['alamat'];

    $tambah= mysqli_query($koneksi,"INSERT INTO alamat(id_alamat,alamat) VALUES('','$alamat')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}

?>


<?php
if (isset($_POST['submit4'])){
    $telepon= $_POST ['telepon'];

    $tambah= mysqli_query($koneksi,"INSERT INTO telepon(id_telepon,telepon) VALUES('','$telepon')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}
?>
<?php

if (isset($_POST['submit5'])){
    $email= $_POST ['email'];
    $tambah= mysqli_query($koneksi,"INSERT INTO email(id_email,email) VALUES('','$email')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}


?>

<?php

if (isset($_POST['submit6'])){
    $sd= $_POST ['sd'];
    $tambah= mysqli_query($koneksi,"INSERT INTO sd(id_sd,sd) VALUES('','$sd')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}


?>

<?php

if (isset($_POST['submit7'])){
    $smp= $_POST ['smp'];
    $tambah= mysqli_query($koneksi,"INSERT INTO smp(id_smp,smp) VALUES('','$smp')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}


?>

<?php

if (isset($_POST['submit8'])){
    $smk= $_POST ['smk'];
    $tambah= mysqli_query($koneksi,"INSERT INTO smk(id_smk,smk) VALUES('','$smk')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}


?>


<?php

if (isset($_POST['submit9'])){
    $prestasi= $_POST ['prestasi'];
    $tambah= mysqli_query($koneksi,"INSERT INTO prestasi(id_prestasi,prestasi) VALUES('','$prestasi')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}


?>

<?php

if (isset($_POST['submit10'])){
    $pengalaman= $_POST ['pengalaman'];
    $tambah= mysqli_query($koneksi,"INSERT INTO pengalaman(id_pengalaman,pengalaman) VALUES('','$pengalaman')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}


?>

<?php

if (isset($_POST['submit11'])){
    $hobby= $_POST ['hobby'];
    $tambah= mysqli_query($koneksi,"INSERT INTO hobby(id_hobby,hobby) VALUES('','$hobby')");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}


?>

</body>
</html>
