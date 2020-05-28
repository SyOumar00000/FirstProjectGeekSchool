<?php
$autoid = $_POST['hid'];
$nom = $_POST['nom'];
$content = $_POST['content'];
$prixUnitaire = $_POST['prixUnitaire'];
$auteur = $_POST['auteur'];
$image = $_POST['image'];
$actif = $_POST['actif'];

include('includes/connection.php');

$sql = "UPDATE articles SET nom='$nom', content='$content', prixUnitaire='$prixUnitaire', auteur='$auteur', image='$image', actif='$actif' WHERE id='$autoid'";

if(mysqli_query($conn, $sql))
{
	header('location:articles.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>