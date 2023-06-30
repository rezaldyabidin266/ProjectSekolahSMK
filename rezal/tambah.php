<?php
include('koneksi.php');
$db = new database();
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
<style type="text/css">
	h1{

text-align: center;

	}



	}

		table{

			text-align: center;

}
	</style>
<body>
<br>
<br>

<div class="container">
<h1>Tambah Data</h1>
<br>
<br>


<form action="proses.php?aksi=tambah" method="post">
	
<table class="table table-borderless table1 ">
	<tr>
		<th>Nama</th>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<th>Alamat</th>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
	<tr>
		<th>Usia</th>
		<td><input type="text" name="usia" class="form-control"></td>
	</tr>
	<tr>
		
		<td><input type="submit" value="Simpan" class="btn btn-primary"></td>
	</tr>
</table>
</form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
