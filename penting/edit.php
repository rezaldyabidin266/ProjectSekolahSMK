<?php

include "koneksi.php";


    $q1 = mysqli_query($koneksi,"SELECT * FROM nama WHERE id='1'");
    $edit1 = mysqli_fetch_array($q1);
    $q2 = mysqli_query($koneksi,"SELECT * FROM pro1 WHERE id_pro1='1'");
    $e2 = mysqli_fetch_array($q2);
    $h3 = mysqli_query($koneksi,"SELECT * FROM alamat WHERE id_alamat='1'");
    $o3 = mysqli_fetch_array($h3);
    $h4 = mysqli_query($koneksi,"SELECT * FROM telepon WHERE id_telepon='5'");
    $o4 = mysqli_fetch_array($h4);
    $h5 = mysqli_query($koneksi,"SELECT * FROM email WHERE id_email='4'");
    $o5 = mysqli_fetch_array($h5);
    $q7 = mysqli_query($koneksi,"SELECT * FROM pengalaman WHERE id_pengalaman='1'");
    $e7 = mysqli_fetch_array($q7);
    $q8 = mysqli_query($koneksi,"SELECT * FROM hobby WHERE id_hobby='1'");
    $e8 = mysqli_fetch_array($q8);
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
    <title>Document</title>
    <link rel="stylesheet" href="styleedit.css">
</head>
<body>

<?php
    session_start();
    
    if($_SESSION['level']==""){
        header("location:login.php?pesan=gagal");
    }
    ?>



    <table border="2px">
    <form  method="POST">
    <nav>
    <h1>Admin</h1>    
    <div class="logut">
<a href="logout.php">logout</a>
</div>
    </nav>
    <div class="edit">

    <label  class="nama">Nama </label>
    <tr>
    <td> 
    <input class="oa1" type="text" name="username" value="<?php echo $edit1['usernama']?>" >
    </td>
    <td class="tombol">
    <div class="kotak">
    <input class="kotak1" type="submit"  name="edit" value="update">
       </div>
        </td>
    </tr>
    <label  class="profil">Profil </label>
    <tr>
    <td>
    <textarea type="text" name="pro1"<?php echo $e2['pro1'] ?>></textarea>
    </td>
        <td class="tombol">
        <div class="kotak">
        <input class="kotak1" type="submit"  name="edit2" value="update">
       </div>
        </td>
    </tr>
    <label  class="alamat">Alamat</label>
    <tr>
    <td>
    <input class="oa1" type="text" name="alamat" value="<?php echo $o3['alamat']?>" >
    </td>
    <td class="tombol">
    <div class="kotak">
    <input class="kotak1" type="submit"  name="edit9" value="update">
       </div>
        </td>
    </tr>
    <label  class="telepon">Telepon</label>
    <tr>
    <td>
    <input class="oa1" type="text" name="telepon" value="<?php echo $o4['telepon']?>" >
    </td>
    <td class="tombol">
    <div class="kotak">
    <input class="kotak1" type="submit"  name="edit10" value="update">
       </div>
        </td>
    </tr>
    <label  class="email">Email</label>
    <tr>
    <td>
    <input class="oa1" type="text" name="email" value="<?php echo $o5['email']?>" >
    </td>
    <td class="tombol">
    <div class="kotak">
    <input class="kotak1" type="submit"  name="edit11" value="update">
       </div>
        </td>
    </tr>
    <label  class="sd">SD</label>
    <tr>
    <td>
    <input class="oa1" type="text" name="sd" value="<?php echo $e3['sd']?>" >
    </td>
    <td class="tombol">
    <div class="kotak">
    <input class="kotak1" type="submit"  name="edit3" value="update">
 
       </div>
        </td>
    </tr>
    <label  class="smp">SMP</label>
    <tr>
    <td>
    <input class="oa1" type="text" name="smp" value="<?php echo $e4['smp']?>">
    </td>
        <td class="tombol">
        <div class="kotak">
        <input class="kotak1" type="submit"  name="edit20" value="update">
       </div>
        </td>
    </tr>
    <label  class="smk">SMK</label>
    <tr>
    <td>
    <input class="oa1" type="text" name="smk" value="<?php echo $e5['smk']?>">
    </td>
        <td class="tombol">
        <div class="kotak">
        <input class="kotak1" type="submit"  name="edit5" value="update">
     
       </div>
        </td>
    </tr>
    <label  class="prestasi">Prestasi</label>
    <tr>
    <td>
    <textarea type="text" name="prestasi" <?php echo $e6['prestasi']?>"></textarea>
    </td>
        <td class="tombol">
        <div class="kotak">
        <input class="kotak1" type="submit"  name="edit6" value="update">
    
       </div>
        </td>
    </tr>
    <label  class="pengalaman">Pengalaman</label>
    <tr>
    <td>
    <textarea type="text" name="pengalaman" <?php echo $e7['pengalaman']?>"></textarea>
    </td>
        <td class="tombol">
            <div class="kotak">
            <input class="kotak1" type="submit"  name="edit7" value="update">
  
       </div>
        </td>
        </div>
    </tr>
    <label  class="hobby">Hobby</label>
    <tr>
    <td>
    <input class="oa1" type="text" name="hobby" value="<?php echo $e8['hobby']?>">  
        </td>
        <td class="tombol">
        <div class="kotak">
        <input class="kotak1" type="submit"  name="edit8" value="update">
      
       </div>
        </td>
    </tr>
    
</table>

<?php

if (isset($_POST['edit'])){
    $usernama= $_POST ['usernama'];

    $tambah= mysqli_query($koneksi,"UPDATE nama SET usernama='$usernama' WHERE id ='1' ");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}

if (isset($_POST['edit2'])){
    $pro1= $_POST ['pro1'];

    $tambah= mysqli_query($koneksi,"UPDATE pro1 SET pro1='$pro1' WHERE id_pro1 ='1' ");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}

if (isset($_POST['edit9'])){
    $alamat= $_POST ['alamat'];

    $tambah= mysqli_query($koneksi,"UPDATE alamat SET alamat='$alamat' WHERE id_alamat ='1' ");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}

if (isset($_POST['edit10'])){
    $telepon= $_POST ['telepon'];

    $tambah= mysqli_query($koneksi,"UPDATE telepon SET telepon='$telepon' WHERE id_telepon ='5'");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}

if (isset($_POST['edit11'])){
    $email= $_POST ['email'];

    $tambah= mysqli_query($koneksi,"UPDATE email SET email='$email' WHERE id_email ='4'");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}

if (isset($_POST['edit3'])){
    $sd= $_POST ['sd'];

    $tambah= mysqli_query($koneksi,"UPDATE sd SET sd='$sd' WHERE id_sd ='1'");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }
}

if (isset($_POST['edit5'])){
    $smk= $_POST ['smk'];

    $tambah= mysqli_query($koneksi,"UPDATE smk SET smk='$smk' WHERE id_smk ='3'");
    if($tambah){

        echo "data berhasil";

    }
    else{

        echo "gagal";

    }

}
    if (isset($_POST['edit6'])){
        $prestasi= $_POST ['prestasi'];
    
        $tambah= mysqli_query($koneksi,"UPDATE prestasi SET prestasi='$prestasi' WHERE id_prestasi ='1'");
        if($tambah){
    
            echo "data berhasil";
    
        }
        else{
    
            echo "gagal";
    
        }
    }

    if (isset($_POST['edit7'])){
        $pengalaman= $_POST ['pengalaman'];
    
        $tambah= mysqli_query($koneksi,"UPDATE pengalaman SET pengalaman='$pengalaman' WHERE id_pengalaman ='1'");
        if($tambah){
    
            echo "data berhasil";
    
        }
        else{
    
            echo "gagal";
    
        }
    }

    if (isset($_POST['edit8'])){
        $hobby= $_POST ['hobby'];
    
        $tambah= mysqli_query($koneksi,"UPDATE hobby SET hobby='$hobby' WHERE id_hobby ='1'");
        if($tambah){
    
            echo "data berhasil";
    
        }
        else{
    
            echo "gagal";
    
        }
    }


    if (isset($_POST['edit20'])){
        $smp= $_POST ['smp'];
    
        $tambah= mysqli_query($koneksi,"UPDATE smp SET smp='$smp' WHERE id_smp ='1'");
        if($tambah){
    
            echo "data berhasil";
    
        }
        else{
    
            echo "gagal";
    
        }
    }


    ?>

    <h2> Data Gambar</h2>
    <div class="table2">
    <table border="2px" >
        <tr>
            <td>NO</td>
            <td>Nama</td>
            <td>Gambar</td>
            <td>Aksi</td>
        </tr>
        <?php 
        $query =mysqli_query($koneksi,"SELECT * FROM tb_gambar1");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['id_gambar1']?></td>
            <td><?php echo $data['nama']?></td>
            <td><img src="uploads/<?php echo $data['file']?>" width="100px" height="100px"></td>
            <td>
            <div class="tabung">
                <a href="editgambar.php?id=<?php echo $data['id_gambar1']?>">Edit</a>
                </div>
            </td>
        </tr>
        <?php }?>
    </table>

    </div>

</body>
</html>


