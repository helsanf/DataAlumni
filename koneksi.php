<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "mynotescode"; // Nama databasenya

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 // Koneksi ke MySQL
/*$perPage = 5; // perhalaman ada berapa Isi
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1; // sama dengan fungsi if
$start = ($page >1) ? ($page * $perPage) - $perPage : 0;

$articles ="SELECT * FROM siswa LIMIT $start, $perPage";
$result2 = mysqli_query($connect,$articles);

$all = "SELECT * FROM siswa";
$result = mysqli_query($connect,$all);
$total = mysqli_num_rows($result);

$pages = ceil($total/$perPage);
?>

<?php  /*while($row = mysqli_fetch_assoc($result2)) { ?>
<p> <?php echo $row["telp"] ?></p>
<?php } ?>

<div class="">
  <?php for($i=1; $i<=$pages; $i++){ ?>
    <a href="?halaman=<?php echo $i?>"> <?php echo $i?></a>
    <?php } ?>
  </div>
  */?>
