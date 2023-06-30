<?php

include "koneksi.php";


$nama_barang = $_POST ['nama_barang'];
$jumlah = $_POST ['jumlah'];
$harga = $_POST ['harga'];


if(isset($_POST['submit'])){


	$data = mysqli_query($koneksi,"INSERT INTO pembelian (id,nama_barang,jumlah,harga) 
		VALUES('','$nama_barang','$jumlah','$harga' )");

	if($data){
		
		header("location:indexedit.php");
	}else{

		echo "data gagal";

	}

}

?>
