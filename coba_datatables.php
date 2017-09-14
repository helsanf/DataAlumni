<?php
  include "koneksi.php";
  $query = "SELECT * FROM siswa";
  $r = mysqli_query($conn,$query)
  or die("Error: ".mysqli_error($conn));
 ?>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
 	<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
 	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
 	<title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
 </head>
 <body>
   <div class="container">
     <h2><center> Testing with database </h2>
       <div class="table-responsive">
         <table id="testing" class="table table-striped table-bordered">
           <thead>
             <tr>
               <th>Foto</th>
           		<th>NIS</th>
           		<th>Nama</th>
           		<th>Jenis Kelamin</th>
           		<th>Telepon</th>
           		<th>Alamat</th>
           		<th colspan="2">Aksi</th>
            </tr>
          </thead>
          <?php
            while ($data = mysqli_fetch_array($r)) {
              echo "<tr>";
          		echo "<td><img src='images/".$data['foto']."' width='50' height='50'></td>";
          		echo "<td>".$data['nis']."</td>";
          		echo "<td>".$data['nama']."</td>";
          		echo "<td>".$data['jenis_kelamin']."</td>";
          		echo "<td>".$data['telp']."</td>";
          		echo "<td>".$data['alamat']."</td>";
          		echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
          		echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
          		echo "</tr>";
          	}

          	?>




         </table>
    </div>
  </div>

</body>
<script>
$(document).ready(function() {
    $('#testing').DataTable();
} );
</script>
</html>
