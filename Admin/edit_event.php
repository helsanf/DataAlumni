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
	 $id=$_GET['id'];
	 $p=mysqli_query($conn, "SELECT * FROM event_tamara WHERE id='".$id."'");
	 while($r=mysqli_fetch_array($p)){
?>



    <form class="form-horizontal" method="post" action="proses_ubahevent.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
    
     
      <div class="form-group">
                      <label for="exampleInputEmail1" class="control-label col-sm-3">Tanggal</label>
                      
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>    
                        <div class="col-sm-6"></div>
                        <input type="text" class="form-control pull-right tanggal_event" name="tanggal_event"  id="datepicker" >
                      </div>
                    </div>


      <div class="form-group">
        <label for="nama" class="control-label col-sm-3">Nama Event :</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="nama_event" value="<?php echo $r['nama_event']; ?>">
      </div>
    </div>
      <div class="form-group">
        <label for="isi" class="control-label col-sm-3">Keterangan :</label>
        <div class="col-sm-6">
        <textarea class="form-control" name="isi" value="<?php echo $r['isi']; ?>"></textarea>  
      </div>
    </div>

      <div class="form-group">
        <label for="foto" class="control-label col-sm-3">Foto : </label>
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
      <button type="button" class="btn btn-default pull-left" >Batal</button>
      <input type="submit" name="simpan" value="simpan" class="btn btn-success" >
    </div>
    </form>


<?php } ?>

</body>
</html>
