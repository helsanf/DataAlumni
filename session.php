
<?php
if(!isset($_SESSION))
    {
        session_start();
    }
    else
    {
        session_destroy();
        session_start();
    }


  if(!isset($_SESSION['user'])){
    echo "<script language = 'javascript'>
    window.location='index.php';
    </script>
    ";
  }

?>