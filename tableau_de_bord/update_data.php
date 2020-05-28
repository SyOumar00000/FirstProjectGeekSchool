<?php
$autoid = $_POST['hid'];
$username = $_POST['username'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];
$status = $_POST['status'];
$email = $_POST['email'];

include('includes/connection.php');

$sql = "UPDATE users SET username='$username', password='$password', email='$email', avatar='$avatar', status='$status' WHERE id='$autoid'";

if(mysqli_query($conn, $sql))
{
	header('location:users.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>