
<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Data </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	.table1{

    		text-align: center;

    	}
    </style>
  </head>
  <body>
<div class="container">
  <!-- Content here -->


<br>
<h1>Data Biodata</h1>

<br>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
  Tambah
</button>
	<br>
	<br>
<table class="table  table1 "  >
  <thead>

		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Alamat</th>
			<th scope="col">Usia</th>
			
			<th scope="col">Action</th>
		</tr></thead>
		 <tbody>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<th ><?php echo $no++; ?></th>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['usia']; ?></td>
		
				<td>
					<a class="btn btn-success" href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
					<a class="btn btn-danger" href="proses.php?id=<?php echo $row['id']; ?>&aksi=hapus">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</div>

<div class="modal fade" id="tambah"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="proses.php?aksi=tambah" method="post">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usia</label>
            <input type="text" class="form-control" name="usia">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>