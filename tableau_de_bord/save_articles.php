<?php
$nom = $_POST['nom'];
$description = $_POST['content'];
$image = $_FILES['image']['name'];
$fichierTemporaire=$_FILES['image']['tmp_name'];
move_uploaded_file($fichierTemporaire,'./images/'.$image);
$prix = $_POST['prixUnitaire'];
$actif = $_POST['actif'];

include('includes/connection.php');

$sql = "INSERT INTO articles VALUES(NULL,'$nom','$prix','$description','$auteur','$image', '$actif')";

if (mysqli_query($conn, $sql))
{
	header('location:articles.php');
}
else
{
	die('Unable to insert data:' .mysql_error());
}

?>
