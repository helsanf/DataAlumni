<html>
<head>

<style>
body {
			padding-top: 20px;
			padding-bottom: 20px;
	}

.navbar {
			margin-bottom: 20px;
	}
</style>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<div class="container">
	<form class="form-horizontal" method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <div class="form-group ">
    <label for="nis" class="control-label col-sm-2">NIS :</label>
		<div class="col-sm-6">
    <input type="text" class="form-control" name="nis" placeholder="NIS Anda">
	</div>
  </div>
	<div class="form-group">
		<label for="tahun" class="control-label col-sm-2"> Tahun </label>
		<div class="col-sm-6">
			<select class="form-control" name="tahun">
				<?php for ($i=2015; $i > 1990 ; $i--) { ?>
					<option><?php echo $i ?></option>
				<?php } ?>
			</select>
		</div>
	</div>


  <div class="form-group">
    <label for="nama" class="control-label col-sm-2">Nama :</label>
		<div class="col-sm-6">
    <input type="text" class="form-control" name="nama" placeholder="Nama Anda">
  </div>
</div>
<div class="form-group">
<label for="jenis_kelamin" class="control-label col-sm-2">Jenis Kelamin :</label>
<div class="col-sm-6">
<select class="form-control" name="jenis_kelamin">

	<option>Laki-Laki</option>
	<option>Perempuan</option>

</select>
</div>
</div>
<div class="form-group">
	<label for="telp" class="control-label col-sm-2">Nomor Telpon :</label>
	<div class="col-sm-6">
		<input type="text" class="form-control" name="telp" placeholder="Nomor Telepon Anda">
	</div>
</div>
<div class="form-group">
	<label for="alamat" class="control-label col-sm-2">Alamat : </label>
	<div class="col-sm-6">
		<textarea class="form-control" name="alamat" placeholder="Masukan Alamat Anda"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="foto" class="control-label col-sm-2">Foto : </label>
		<div class="col-sm-6">
			<input type="file" name="foto">
		</div>
	</div>
	<div class="form-group">
		<center>
	<input type="submit" value="simpan" class="btn btn-success" >
	<a href="index.php"><input type="button" value="Batal" class="btn btn-danger"  </a> </center>
</div>

</form>


</body>
</html>
