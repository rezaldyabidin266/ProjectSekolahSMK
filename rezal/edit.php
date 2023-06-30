<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
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


		table{

			text-align: center;
		

		}
	</style>
</head>
<body>
<div class="container">
<br>
<br>
<br>
		<div class="row">
			<div class="col-sm-12 ">
				<h1>Edit Biodata</h1>
			</div>
		</div>

<?php
foreach($db->edit($_GET['id']) as $d){
?>

<br>
	<div class="row">

		<form class="col-sm-12 " style="margin-left: 350px;" action="proses.php?aksi=update" method="post">

  				<div class="form-group">
 
    				<input style="width: 400px;"  type="hidden" name="id" value="<?php echo $d['id'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   					<label for="exampleInputPassword1">Nama</label>
    				<input style="width: 400px;" type="text"  name="nama" value="<?php echo $d['nama'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
  				</div>

  				<div class="form-group">
    				<label for="exampleInputPassword1">Alamat</label>
    				<input style="width: 400px;" type="text"  name="alamat" value="<?php echo $d['alamat'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
 				 </div>

   				 <div class="form-group">
    				<label for="exampleInputPassword1">Usia</label>
    				<input style="width: 400px;" type="text"  name="usia" value="<?php echo $d['usia'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
  
  				</div>

    			<button type="submit" class="btn btn-primary">Simpan</button>
    			</form>
    	</div>
 </div>
 		<?php } ?>
</form>

</div>
</body>
</html>