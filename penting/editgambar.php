<?php

include "koneksi.php";

    $data = mysqli_query($koneksi,"SELECT * FROM tb_gambar1 WHERE id_gambar1 = '".$_GET['id']."'");
    $r = mysqli_fetch_array($data);

    $nama=$r['nama'];
    $file=$r['file'];

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
    <form method="POST" action="" enctype="multipart/form-data">
    <table>
    <a href="edit.php">Data </a>
    <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?php echo $r['nama'] ?>"/></td>

    </tr>
    <tr>
        <td>file</td>
        <td>:</td>
        <input type="hidden" name="img" value="<?php echo $file ?>"/>
        <td><input type="file" name="gambar"/></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><img src="uploads/<?php echo $file ?>" width="100px" height="100px"/></td>
    </tr>
    <tr>
        <td></td>
        <td>:</td>
        <td><input type="submit" name="kirim" value="update"/></td>
    </tr>

    
    </table>
    </form>

<?php

if (isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = './uploads/';

    if($nama_file != ''){
    move_uploaded_file($source, $folder.$nama_file);
    $update = mysqli_query($koneksi, "UPDATE tb_gambar1 SET
    nama = '".$nama."',
    file = '".$nama_file."'
    WHERE id_gambar1 = '".$_GET['id']."'");
    if($update){
        echo 'Berhasil Update';
    }else{
        echo'Gagal Updater';
    }
    }else{
        $update = mysqli_query($koneksi, "UPDATE tb_gambar1 SET
        nama = '".$nama."',
        WHERE id_gambar1 = '".$_GET['id']."'");
    
    if($update){
        echo 'Berhasil Update';
    }else{
        echo'Gagal Updater';
    } 
    }
}

?>

</body>
</html>
  
