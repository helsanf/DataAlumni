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
   <?php
  // Load file koneksi.php
  include "koneksi.php";
  include "session.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM event_tamara WHERE id='".$id."'";
  $sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>

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
        Event SMAN 1 Tambun Utara
      </h1>
    
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

<!-- Main content -->
     <div class="box-body">
  

  
  <form class="form-horizontal" method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  <div class="form-group">
        <label for="nama" class="control-label col-sm-3">Nama Event :</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="nama_event" value="<?php echo $data['nama_event']; ?>">
      </div>
    </div>
      <div class="form-group">
        <label for="isi" class="control-label col-sm-3">Keterangan :</label>
        <div class="col-sm-6">
        <input type="text " class="form-control" name="isi" value="<?php echo $data['isi']; ?>"> 
      </div>
    </div>
   <div class="form-group">
        <label for="foto" class="control-label col-sm-3">Foto : </label>
        <div class="col-sm-6">
          <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
          <input type="file" name="foto">
        </div>
      </div>
  
  
  <footer>
  <input type="submit" value="Ubah">
  <a href="home.php"><input type="button" value="Batal"></a>
</footer>
  </form>
              <!-- jQuery 3 -->
 </div>
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

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>