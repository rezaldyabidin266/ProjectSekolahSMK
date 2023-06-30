<?php

include 'koneksi.php';

$id= $_GET['id'];

mysqli_query($koneksi,"DELETE FROM pembelian where id='$id'");

header("location:indexedit.php");

?>