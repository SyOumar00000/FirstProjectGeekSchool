<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn, 'enregistrement');
if(mysqli_connect_errno())
  {
  echo " failed to connect to mysql:".mysqli_connect_error();
  }
 ?>
<!-- connection a la base de donnees -->
