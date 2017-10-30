<!DOCTYPE html>
<?php
include "koneksi.php";
include "session.php";
if (isset($_POST['hapus']) ) {
    $id = $_GET['id'];

    $query1 = "SELECT * FROM event_tamara WHERE id='".$id."'";
$sql1 = mysqli_query($conn, $query1); // Eksekusi/Jalankan query dari variabel $query
$data1 = mysqli_fetch_array($sql1); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data1['foto'])) // Jika foto ada
  unlink("images/".$data1['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM event_tamara WHERE id='".$id."'";
$sql2 = mysqli_query($conn, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: event_tamara.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}

  }


$query ="SELECT * FROM event_tamara"; // query semua colum dalam table databse
// if (isset($_GET['tahun'])) {
//   $query ="SELECT * FROM siswa WHERE tahun = '$_GET[tahun]'"; // query cari kolum dalam table ( KOLUM TAHUN )
// }

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
       <center><a href="tambah_event.php" class="btn btn-primary"> Tambah Event</a></center>
    <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Tanggal</th>
                    <th>Nama Event</th>
                    <th>Isi</th>
                    <th>Aksi </th>
                    
                  </tr>
              </thead>

            <?php
              $no = 0;
              $no++;
            while ($data = mysqli_fetch_array($r)) { ?>
            
            
              <tr>
                <td><?php echo $no; ?> </td>
                <td><img src='images/<?php echo $data['foto'];  ?>' width='50' height='50'></td>
                
               
                <td><?php echo $data['tanggal_event']; ?></td>
                <td><?php echo $data['nama_event']; ?></td>
                <td><?php echo $data['isi']; ?></td>
                <?php if($_SESSION['status'] == 1){
                  echo "<td>
                  <a href='testingedit.php?id=".$data['id']."' class='btn btn-success btn-small' >Edit</a>
                  <a class='btn btn-danger'  name='hapus' >Hapus</a>
                  </td>";} ?>
                  <!-- dibawah ini outputan social media -->
                  
              </tr>

            <?php  }


            ?>


            </table>
            <?php include 'modal/data_siswa.php'; ?>
            </div>
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
$('#modal-event').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).data('id');
    //menggunakan fungsi ajax untuk pengambilan data
    $.ajax({
    type : 'get',
    url : 'edit_event.php',
    data : 'id='+ id,
    success : function(data){
    $('.isi-event').html(data);//menampilkan data html ke dalam modal
    }
    });
    });
    });
</script>
<!-- bootstrap datepicker -->

<script type="text/javascript">
          $(document).ready(function(){
            $('.tanggal').datepicker({
                format: "yyyy-mm-dd",
                autoclose:true
                });
          })


        </script>
</body>
</html>