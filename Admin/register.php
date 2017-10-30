<?php

include "koneksi.php";
include 'function_register.php';
// $user = $_POST['user'];
// $pass = md5($_POST['password']);
//   $query = "INSERT INTO users (user, password) VALUES ('$user','$pass')";
//   $sql = mysqli_query($conn, $query);
//validasi register_user
if (isset($_POST['daftar']) ) {
    $nama = $_POST['user'];
    $pass = md5($_POST['password']);

if (!empty(trim($nama)) && !empty(trim($pass)) ){
  // Memasukan Ke Database memakai function
  if(register_user($nama, $pass)){
    echo '<script>
  alert("Berhasil Daftar , Silahkan Login!")
    window.location = "index.php";
    </script>';
  }else{
    echo '<script>
    alert("Gagal Daftar! Username Tidak Boleh Sama!")

    </script>';
  }
} else{
  echo '<script>
  alert("Username Dan Password tidak boleh Kosong!")
  ';
}
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <!-- sweet alert css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register</p>

    <form action="register.php" method="post" >
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="user" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password"  name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="daftar" class="btn btn-primary btn-block btn-flat">DAFTAR</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.min.js"></script>
    <script type="text/javascript">
       function panggil_alert(){
         swal({
          title: 'Success!',
          text: 'Anda Berhasil Terdaftar! Silahhkan Login!',
          type: 'success',
          timer: 2000,
        });
       }
    </script>
