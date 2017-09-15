<html>
<head>
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
</head>
<body>

<?php
    include "koneksi.php";
	$nis=$_GET['nis'];
	$p=mysqli_query($conn, "SELECT * FROM siswa WHERE nis='".$nis."'");
	while($r=mysqli_fetch_array($p)){
?>



    <form class="form-horizontal" method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
    <div class="modal-body">
      <!-- dibawah taruh file form simpan -->

      <div class="form-group ">
        <label for="nis" class="control-label col-sm-2">NIS :</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="nis" value="<?php echo $r['nis']; ?>">
      </div>
      </div>
      <div class="form-group">
        <label for="tahun" class="control-label col-sm-2"> Tahun </label>
        <div class="col-sm-6">
          <select class="form-control" name="tahun">
            <?php for ($i=2015; $i > 1990 ; $i--) { ?>
              <option value="<?php echo $i; ?>" <?php if($r['tahun'] == $i){ echo "selected"; } ?> ><?php echo $i; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>


      <div class="form-group">
        <label for="nama" class="control-label col-sm-2">Nama :</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="nama" value="<?php echo $r['nama']; ?>">
      </div>
    </div>
    <div class="form-group">
    <label for="jenis_kelamin" class="control-label col-sm-2">Jenis Kelamin :</label>
    <div class="col-sm-6">
    <select class="form-control" name="jenis_kelamin">

      <option value="Laki-Laki" <?php if($r['jenis_kelamin'] == "Laki-Laki"){ echo "selected"; } ?> >Laki-Laki</option>
      <option value="Perempuan" <?php if($r['jenis_kelamin'] == "Perempuan"){ echo "selected"; } ?>>Perempuan</option>

    </select>
    </div>
    </div>
    <div class="form-group">
      <label for="telp" class="control-label col-sm-2">Nomor Telpon :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="telp" value="<?php echo $r['telp']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="alamat" class="control-label col-sm-2">Alamat : </label>
      <div class="col-sm-6">
        <textarea class="form-control" name="alamat"><?php echo $r['alamat']; ?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="foto" class="control-label col-sm-2">Foto : </label>
        <div class="col-sm-6">
          <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
          <input type="file" name="foto">
        </div>
      </div>
      <div class="form-group">
        <center>

    </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
      <input type="submit" name="simpan" value="simpan" class="btn btn-success" >
    </div>
    </form>


<?php } ?>

</body>
</html>
