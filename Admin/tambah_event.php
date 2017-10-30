<?php 
  include "koneksi.php";
include "session.php";
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMAN 1 TAMBUN UTARA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
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

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="css/datepicker3.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <!-- DIBAWAH INI ADALAH HEADER -->
  <?php include 'template/header.php'; ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php include 'template/sidebar.php'; ?>

  <!-- =============================================== -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  


	
    <!-- Main content -->
    <section class="content">
		   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Event Tamara</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="simpan_event.php" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Event</label><br>
				  <input type="text" name="nama_event" class="form-control" id="exampleInputEmail1" placeholder="Nama Perusahaan..." required = "required();">
				</div>

              <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right tanggal" name="tanggal_event"  id="datepicker">
                      </div>
                    </div>

                <div class="form-group">
                  <label for="isi">Keterangan</label><br>
				  <textarea name="isi" class="textarea" placeholder="Keterangan..."  required = "required();" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
				</div>
				
        <div class="form-group">
                <div class="form-group">
          <label for="foto">Foto</label>
                    <input type="file" name="foto" id="exampleInputFile">
        </div>
        </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer" >
                <button type="submit" name="input" style="float:right;" class="btn btn-primary">Simpan</button>
                <button type="reset" style="float:right;margin-right:5px;" class="btn btn-primary">Batal</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- bootstrap datepicker -->
<script src="js/bootstrap-datepicker.js"></script>

<!-- bootstrap datepicker -->

<script type="text/javascript">
          $(document).ready(function(){
            $('.tanggal').datepicker({
                format: "yyyy-mm-dd",
                autoclose:true
                });
          })


        </script>

</script>
</body>
</html>