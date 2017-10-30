<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Ubah Data Siswa</h1>

	<?php
	// Load file koneksi.php
	include "koneksi.php";

	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$nis = $_GET['nis'];

	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM siswa WHERE nis='".$nis."'";
	$sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
<div class="container">
	<form method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
	  <div class="form-group ">
	    <label for="nis" class="control-label col-sm-2">NIS :</label>
			<div class="col-sm-6">
	    <input type="text" class="form-control" name="nis" value="<?php echo $data['nis']?>">
		</div>
	  </div>
		<div class="form-group">
			<label for="tahun" class="control-label col-sm-2"> Tahun </label>
			<div class="col-sm-6">
				<select class="form-control" name="tahun" value="<?php echo $data['tahun']?>">
					<?php for ($i=2015; $i > 1990 ; $i--) { ?>
						<option><?php echo $i ?></option>
					<?php } ?>
				</select>
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

	<tr>
		<td>Telepon</td>
		<td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto">
		</td>
	</tr>
	</table>

	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
