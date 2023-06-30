<?php

include 'koneksi.php';

$id = $_POST ['id'];
$nama_barang = $_POST ['nama_barang'];
$jumlah = $_POST ['jumlah'];
$harga = $_POST ['harga'];


mysqli_query($koneksi,"UPDATE pembelian SET nama_barang='$nama_barang', jumlah='$jumlah', harga='$harga' where id='$id'");

header("location:indexedit.php");
?>
