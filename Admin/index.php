<!DOCTYPE html>
<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION))
{
    session_start();
}


if(isset($_SESSION['user'])){
  echo "<script language = 'javascript'>
  window.location='home.php';
  </script>
  ";
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
  


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="images/tamara.png" class="img-circle" alt="Tamara" width="304" height="236">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="user" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password"  name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

              <a href="register.php" class="btn btn-primary"> Daftar </a>

        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <div class="clearfix"> </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
    <?php
    if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = md5($_POST['password']);


    $login = mysqli_query($conn,"SELECT * FROM users WHERE user = '$username' and password='$password'");
    if (mysqli_num_rows($login) == 1) {
    $ses = mysqli_fetch_array($login);
    $_SESSION['user'] = $ses['user'];
    $_SESSION['status'] = $ses['status'];

    echo "<script type='text/javascript'>
            setTimeout(function() {
            swal({
            title: 'Login Berhasil',
                text: 'Selamat Datang',
                icon: 'success',
                timer: 2000,
                button: false
            });
            }, 10);
            window.setTimeout(function() {
            document.location.href='home.php';
            }, 2000);
            </script>";
    } else {
    echo "<script type='text/javascript'>
            setTimeout(function() {
            swal({
            title: 'Login Gagal',
                text: 'Akun anda tidak terdaftar',
                icon: 'error',
                timer: 2000,
                button: false,
            });
            }, 10);
            window.setTimeout(function() {
            document.location.href='index.php';
            }, 2000);
            </script>";
    }
    }

    ?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<!-- Sweetalert  -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
