<!DOCTYPE html>
<?php
include "koneksi.php";
include "session.php";
$query ="SELECT * FROM siswa";
if (isset($_GET['tahun'])) {
  $query ="SELECT * FROM siswa WHERE tahun = '$_GET[tahun]'";
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

  <header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $_SESSION['user']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p><?php echo $_SESSION['user']; ?></p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
         <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
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
          <h3 class="box-title">Data Alumni</h3>

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
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
              TAMBAH DATA SISWA
            </button>
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
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
              </thead>

            <?php
            // Load file koneksi.php

            /*$perPage = 5; // perhalaman ada berapa Isi
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1; // sama dengan fungsi if
            $start = ($page >1) ? ($page * $perPage) - $perPage : 0;

            $articles ="SELECT * FROM siswa LIMIT $start, $perPage";
            $result2 = mysqli_query($connect,$articles);

            $all = "SELECT * FROM siswa";
            $result = mysqli_query($connect,$all);
            $total = mysqli_num_rows($result);

            $pages = ceil($total/$perPage);
          */

            //$query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
            //$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

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
                <?php echo "<td><a href='#modal-edit' class='btn btn-default btn-small' id='custId' data-toggle='modal' data-id=".$data['nis'].">Edit</a></td>"; ?>
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
        <?php }else{ ?>
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
        <div class="modal fade" id="modal-edit" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data</h4>
              </div>
              <div class="modal-body">
                <div class="isi-data"></div>
              </div>
            </div>
          </div>
        </div>

</div>


        </div>
        <!-- Modal Edit END-->

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <form class="form-horizontal" method="post" action="proses_simpan.php" enctype="multipart/form-data">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Siswa</h4>
              </div>
              <div class="modal-body">
                <!-- dibawah taruh file form simpan -->

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

              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <input type="submit" value="simpan" class="btn btn-success" >
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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
