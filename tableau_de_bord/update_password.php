<?php
// $AdminAutoId = $_POST['uAid'];
$password = $_POST['password'];

include('includes/connection.php');

$sql = "UPDATE users SET password='$password' WHERE status = 1";

if(mysqli_query($conn, $sql))
{
	header('location:logout.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>