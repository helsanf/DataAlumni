

<?php

session_start();
  if(!isset($_SESSION['user'])){
    echo "<script language = 'javascript'>
    window.location='index.php';
    </script>
    ";
  }

?>
