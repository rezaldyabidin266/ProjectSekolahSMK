<?php

include "koneksi.php";	


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    body{
    	margin: 0;
    	padding: 0;
    }
    	table{

    		text-align: center;
    		font-size: 18px;
    		font-weight: bold;

    	}
    	.kotak{

    		width: 100%;

    	}
    	.p{
    		font-size: 28px;
    		font-weight: bold;
    		font-family: arial;
    	}

    	.p2{

    		font-size: 18px;
    		text-decoration: underline;
    		font-family: arial;
    		color: white;
    	}

    	.p3{

    		font-size: 22px;
    		margin-right: -80px ;
    		margin-left: 20px;
    	}

    	th{

    		border-bottom: 2px solid black;

    	}

    	.pos{

    		position: relative;
    		left:2%;

    	}
    </style>


  </head>
<body>


<div class="container-fluid kotak">


<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-white p" href="#">Data Pembelian</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
 
       <li class="nav-item active p2">
        <a class="nav-link btn btn-dark text-white p2" href="login.php">Login <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

</div>  
<br>
<br>
<br>

<div class="container">
<form class="form-inline" method="get" action="index.php" >
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Cari Data</label>
    <input type="text" readonly class="form-control-plaintext p3" id="staticEmail2" value="Cari Data">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Cari Data</label>
   	<input type="text" name="cari">
  </div>
 
  <input type="submit" name="submit" value="Cari" class="btn btn-primary mb-2">
</form>
<table border="3px" class="table">
<tr>
	<th scope="col">NO</th>
	<th scope="col">Nama Barang</th>
	<th scope="col">Jumlah</th>
	<th scope="col">Harga</th>

</tr>
<?php
if(isset($_GET['cari'])){
	$cari = $_GET ['cari'];
	$select = mysqli_query($koneksi,"SELECT * FROM pembelian where nama_barang like '%$cari%' ");
}else{

$select = mysqli_query($koneksi,"SELECT * FROM pembelian  ");

}

$no = 1;
while($data = mysqli_fetch_array($select)){

?>

<tr>
	<td><?php echo $no++;?></td>
	<td> <?php echo $data['nama_barang'];?></td>
	<td><?php echo $data['jumlah'];?></td>
	<td><?php echo $data['harga'];?></td>

</tr>


<?php
}
?>
	



</table>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


