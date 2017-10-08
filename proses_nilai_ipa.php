<?php
  include 'koneksi.php';
  $nis = $_POST ['nis'];
  $nama = $_POST ['nama'];
  $kelas = $_POST ['kelas'];
  $bindo = $_POST ['bindo'];
  $binggris = $_POST ['binggris'];
  $matematika = $_POST ['matematika'];
  $fisika = $_POST ['fisika'];
  $kimia = $_POST ['kimia'];
  $biologi = $_POST ['biologi'];

// Query Insert ke database
$query = "INSERT INTO nilai_ipa SET nis='$nis' , nama='$nama' , kelas='$kelas' , bindo='$bindo' , binggris='$binggris' , matematika='$matematika' , fisika='$fisika' , kimia='$kimia' , biologi='$biologi'";
$sql = mysqli_query($conn,$query);

if($sql){
  header("location: nilai_ipa.php");
}
else{
  echo "Maaf Data Gagal di simpan , silahkan input ulang .";
    header("location: form_input_ipa.php");
}

 ?>
