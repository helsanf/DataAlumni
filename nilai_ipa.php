<!DOCTYPE html>
<?php
include "koneksi.php";
include "session.php";
$query ="SELECT * FROM `nilai_ipa` ni INNER JOIN kelas k ON ni.id_kelas = k.id";
 if (isset($_GET['nis'])) {
   $query ="SELECT * FROM `nilai_ipa` ni INNER JOIN kelas k ON ni.id_kelas = k.id WHERE ni.nis = '$_GET[nis]'";
 }

$r = mysqli_query($conn,$query)
or die("Error: ".mysqli_error($conn));
 ?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        Panel Nilai Online SMAN 1 TAMBUN UTARA</h1>


      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="semua_nilaiipa.php">Tampil Semua Nilai</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <?php if (isset($_GET['nis'])){ ?>
        <div class="box-body">
          <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" >
            TAMBAH DATA SISWA
          </button></center>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
          <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Matematika</th>
            <th>Fisika</th>
            <th>Kimia</th>
            <th>Biologi</th>

          </tr>
      </thead>

    <?php


    while ($data = mysqli_fetch_array($r)) { ?>
      <tr>
        <td><?php echo $data['nis'];?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['bindo']; ?></td>
        <td><?php echo $data['binggris']; ?></td>
        <td><?php echo $data['matematika']; ?></td>
        <td><?php echo $data['fisika']; ?> </td>
        <td><?php echo $data['kimia']; ?></td>
        <td><?php echo $data['biologi']; ?></td>
      </tr>

    <?php } ?>
    <!-- diatas ialah penutup while -->

    </table>
    </div>
    </div>
  <?php }
   else{ ?>
     <div class="rows">

       <div class="col-sm-6 col-md-offset-2">
         <p class="text-center">
            <img src="images/tamara.png" alt="Sman 1 Tambun utara" class="img-circle" >
         </p>

         <form method="get">
           <div class="form-group">
             <label for="nis" class="control-label col-md-4" style="text-align:right; padding-right:0;padding-top:6px;"> Masukan NIS Anda</label>
             <div class="col-md-6">
               <input type="text" name="nis" class="form-control">
             </div>
           </div>
           <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
   </div>
   <?php } ?>


        </div>

        <!-- Modal Popup untuk Edit-->


</div>


        </div>
        <!-- Modal data siswa sudah ada modal edit dan tambah-->

        <?php include 'form_input_ipa.php'; ?>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
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
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
$(document).ready(function(){
$('#modal-edit').on('show.bs.modal', function (e) {
    var nis = $(e.relatedTarget).data('id');
    //menggunakan fungsi ajax untuk pengambilan data
    $.ajax({
    type : 'get',
    url : 'modal_edit.php',
    data : 'nis='+ nis,
    success : function(data){
    $('.isi-data').html(data);//menampilkan data ke dalam modal
    }
    });
    });
    });
</script>
</body>
</html>
