
<?php
    include "koneksi.php";
	$id=$_GET['id'];
	$p=mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
	while($r=mysqli_fetch_array($p)){
?>

<div class="modal-dialog">
  <div class="modal-content">
    <form class="form-horizontal" method="post" action="proses_ubah.php" enctype="multipart/form-data">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Default Modal</h4>
    </div>
    <div class="modal-body">
      <!-- dibawah taruh file form simpan -->

      <div class="form-group ">
        <label for="nis" class="control-label col-sm-2">NIS :</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="nisnya" value="<?php echo $r['nis']; ?>">
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
        <input type="text" class="form-control" name="namanya" value="<?php echo $r['nama']; ?>">
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
          <input type="file" name="ubah_foto">
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
  </div>
  <!-- /.modal-content -->
</div>
<?php } ?>
