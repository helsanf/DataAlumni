<!DOCTYPE html>
<?php
include "koneksi.php";
include "session.php";
$query ="SELECT * FROM siswa"; // query semua colum dalam table databse
if (isset($_GET['tahun'])) {
  $query ="SELECT * FROM siswa WHERE tahun = '$_GET[tahun]'"; // query cari kolum dalam table ( KOLUM TAHUN )
}

$r = mysqli_query($conn,$query) // panggil semua kolum dari variable $query diatas
or die("Error: ".mysqli_error($conn));
 ?>

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
        Data Alumni SMA Negeri 1 Tambun Utara
      </h1>
    <center>  <img src="images/tamara.png" class="img-circle" alt="Tamara" width="200" height="200"></center>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <center><h3 class="box-title">Silahkan Pilih Tahun Berapa Anda lulus!</h3></center>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <?php if (isset($_GET['tahun'])){ ?>
            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" >
              TAMBAH DATA SISWA
            </button></center>
            <!-- End Modal Tambah Data Siswa -->
            <!-- Tampil Table -->
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>Foto</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tahun</th>
                    <th>Jenis Kelamin</th>
                    <?php if($_SESSION['status'] == 1){
                      echo "<th>Telepon</th>";
                    }
                    ?>
                    <th style="width:30%;">Alamat</th>
                    <?php if($_SESSION['status'] == 1){
                      echo "<th style='width:20%;'>Aksi</th>";
                    } ?>
                    <th  style="width:10%;"> Sosial Media </th>

                  </tr>
              </thead>

            <?php


            while ($data = mysqli_fetch_array($r)) { ?>
              <tr>
                <td><img src='images/<?php echo $data['foto'];  ?>' width='50' height='50'></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['tahun']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <?php if($_SESSION['status'] == 1){
                  echo "<td>".$data['telp']."</td>";
                }
                ?>
                <td><?php echo $data['alamat']; ?></td>
                <?php if($_SESSION['status'] == 1){
                  echo "<td>
                  <a href='#modal-edit' class='btn btn-success btn-small' id='custId' data-toggle='modal' data-id=".$data['nis'].">Edit</a>
                  <a class='btn btn-danger' href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a>
                  </td>";} ?>
                  <!-- dibawah ini outputan social media -->
                  <td><a href="<?php echo $data['fb_user'];?>"><img src="images/facebook.png" style="width:30px;height:30;">
                    <a href="<?php echo $data['insta_user'];?>"><img src="images/instagram.png" style="width:30px;height:30;">

                  </td>
              </tr>

            <?php }


            ?>


            </table>
            <?php /*<div class="" align="center">?>
              <?php for($i=1; $i<=$pages; $i++){ ?>
                <ul class="pagination pagination-lg">
                  <li><a href="?halaman=<?php echo $i?>"> <?php echo $i?></a></li>
                </ul>
                <?php } */ ?>
              </div>
          </div>
        <?php }
        else{ ?>
          <div class="rows">
            <div class="col-sm-8 col-md-offset-2">
              <form method="get">
                <div class="form-group">
                  <label for="tahun" class="control-label col-md-2"> Tahun </label>
                  <div class="col-md-6">
                    <select class="form-control" name="tahun">
                      <?php for ($i=2015; $i > 1990 ; $i--) { ?>
                        <option><?php echo $i ?></option>
                      <?php } ?>
                    </select>
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
        <?php include 'modal/data_siswa.php'; ?>
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
      'searching'   : true,
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
