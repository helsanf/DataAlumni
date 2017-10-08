<?php
  function register_user ($nama, $pass){
    // $host = "localhost"; // Nama hostnya
    // $username = "root"; // Username
    // $password = ""; // Password (Isi jika menggunakan password)
    // $database = "mynotescode"; // Nama databasenya
  // $conn = new mysqli('localhost', 'root', '', 'mynotescode');
  // $conn = new PDO('mysql:host=localhost;dbname=mynotescode', 'root', '');
    global $conn;
    $query = "INSERT INTO users (user, password , status) VALUES ('$nama','$pass' ,'0')";

    if (mysqli_query($conn, $query)) {
      return true;
    }else{
      return false;
    }


  }

 ?>
