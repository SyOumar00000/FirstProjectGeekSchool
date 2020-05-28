<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$avatar = $_POST['avatar'];


include('includes/connection.php');

$sql = "INSERT INTO users VALUES('','$username','$password','$email','$avatar')";

if (mysqli_query($conn, $sql))
{
	header('location:users.php');
}
else
{
	die('Unable to insert data:' .mysql_error());
}

?>