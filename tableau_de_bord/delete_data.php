<?php
$id = $_GET['delID'];

include('includes/connection.php');

$sql = "DELETE FROM users WHERE id=$id";
if(mysqli_query($conn, $sql))
{
	header('location:users.php');
}
else
{
	die('Could not delete record:' .mysql_error());
}
?>