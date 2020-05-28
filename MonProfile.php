<?php require 'config.php'; ?>
<?php
//On verifie que lidentifiant de lutilisateur est defini
if(isset($_GET['id']))
{
	$id = intval($_GET['id']);
	//On verifie que lutilisateur existe
	$dn = mysqli_query($conn, 'select username, email, avatar, signup_date from users where id="'.$id.'"');
	if(mysqli_num_rows($dn)>0)
	{
		$dnn = mysqli_fetch_array($dn);
		//On affiche les donnees de lutilisateur
?>
Voici le profil de "<?php echo htmlentities($dnn['username']); ?>" :
<table style="width:500px;">
	<tr>
    	<td><?php
if($dnn['avatar']!='')
{
	echo '<img src="'.htmlentities($dnn['avatar'], ENT_QUOTES, 'UTF-8').'" alt="Image Perso" style="max-width:100px;max-height:100px;" />';
}
else
{
	echo 'Cet utilisateur n\'a pas d\'image perso.';
}
?></td>
    	<td class="left"><h1><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	Email: <?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?><br />
        Cet utilisateur s'est inscrit le <?php echo date('d/m/Y',$dnn['signup_date']); ?></td>
    </tr>
</table>
<?php
//On affiche un lien pour envoyer un mp a lutilisateur
if(isset($_SESSION['username']))
{
?>
<br /><a href="new_pm.php?recip=<?php echo urlencode($dnn['username']); ?>" class="big">Envoyer un MP à "<?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?>"</a>
<?php
}
	}
	else
	{
		echo 'Cet utilisateur n\'existe pas.';
	}
}
else
{
	echo 'L\'identifiant de l\'utilisateur n\'est pas d&eacute;fini.';
}
?>