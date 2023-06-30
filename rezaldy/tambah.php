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

    <style >
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
    		color: darkblue;
    	}
    	h2{
    		font-family: arial;
    		text-align: center;
    	}
    </style>
</head>
<body>
<?php

session_start();
if($_SESSION['status']!="login"){
  header("location:../index.php?pesan=belum_login");
}

?>
<div class="container-fluid kotak">


<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-white p" href="#">Input Data</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active p2">
        <a class="nav-link  p2" href="indexedit.php">Data Pembelian <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>

</div>  
<br>
<br>
<br>
<br>
<h2>Masukan Data Barang</h2>
<br>
<br>

<div class="container">

<form method="POST" action="aksi_tambah.php">
  <div class="form-group" method="POST" action="aksi_tambah.php">
    <label for="exampleInputEmail1">Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang ....">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah</label>
    <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1" placeholder="Jumlah....">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="text" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Rp.">
  </div>
 	<input type="submit" name="submit" value="Kirim" class="btn btn-primary">

</form>

</div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>