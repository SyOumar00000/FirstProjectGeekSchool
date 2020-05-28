<?php
 $username = $_POST['username'];
$password = $_POST['password'];

include 'includes/connection.php';

$sql = "SELECT * FROM users WHERE status = 1 and password='$password'";
$result =mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num==1)
{
  session_start();
  $_SESSION['password'] = $password;
  header('location:index.php');
}
else
{
  session_start();
  $_SESSION['msg'] = '<h2>Invalid username or password!</h2>';
  header('location:login.php');
}
?>
