<?php

include "koneksi.php";


    $q1 = mysqli_query($koneksi,"SELECT * FROM nama WHERE id='1'");
    $edit1 = mysqli_fetch_array($q1);
    $q2 = mysqli_query($koneksi,"SELECT * FROM pro1 WHERE id_pro1='1'");
    $e2 = mysqli_fetch_array($q2);
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
    
    <form method="POST" >
    <p>
            <label>Nama barang</label>
            <input type="text" name="username" value="<?php echo $edit1['username'] ?>">
        </p>
  
        <p>
            <input type="submit" name="edit" value="edit">
        </p>
        <p>
        <label>isi</label>
          <textarea type="text" name="pro1"> <?php echo $e2['pro1']?> </textarea>
        </p>
        <input type="submit" name="edit2" value="edit">
    </form>




</body>
</html>



    <?php

if (isset($_POST['edit'])){
    $username= $_POST ['username'];

    $tambah= mysqli_query($koneksi,"UPDATE nama SET username='$username' WHERE id ='1' ");
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


    ?>

</body>
</html>
