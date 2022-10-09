<?php
 session_start();

  echo "Logout Successfully ";
  unset ($_SESSION['user']);
  session_destroy();   
  header("Location: index.php");
?>