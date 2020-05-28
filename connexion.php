<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="design.css" rel="stylesheet" title="Style" />
        <link href="rebuild.css" rel="stylesheet" title="Style" />
        <title>Connection</title>
    </head>
    <body>

<?php
//Si lutilisateur est connecte, on le deconecte
if(isset($_SESSION['username']))
{
	//On le deconecte en supprimant simplement les sessions username et userid
	unset($_SESSION['username'], $_SESSION['userid']);
?>
 <?php header('location:index.php'); ?>
<?php
}
else
{
	$ousername = '';
	//On verifie si le formulaire a ete envoye
	if(isset($_POST['username'], $_POST['password']))
	{
		//On echappe les variables pour pouvoir les mettre dans des requetes SQL
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = mysqli_real_escape_string($conn, stripslashes($_POST['username']));
			$password = stripslashes($_POST['password']);
		}
		else
		{
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = $_POST['password'];
		}
		//On recupere le mot de passe de lutilisateur
		$req = mysqli_query($conn, 'select password,id from users where username="'.$username.'"');
		$dn = mysqli_fetch_array($req);
		//On le compare a celui quil a entre et on verifie si le membre existe
		if($dn['password']==$password and mysqli_num_rows($req)>0)
		{
			//Si le mot de passe es bon, on ne vas pas afficher le formulaire
			$form = false;
			//On enregistre son pseudo dans la session username et son identifiant dans la session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid'] = $dn['id'];
      	// $_SESSION['avatarsecond'] = $dn['avatarsecond'];
?>
 <?php header('location:index.php'); ?>
<?php
		}
		else
		{
			//Sinon, on indique que la combinaison nest pas bonne
			$form = true;
			$message = 'La combinaison que vous avez entr&eacute; n\'est pas bonne.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//On affiche un message sil y a lieu
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//On affiche le formulaire
?>
<div class="content">
  <div class="row">
    <div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="connexion.php" method="post">
		<h3>Entrer vos identifiants pour vous connecter:</h3><br/>
			<div class="body-content">
				<label for="username">Nom d'utilisateur</label><input type="text" name="username" id="username" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" /><br />
				<label for="password">Mot de passe</label><input type="password" name="password" id="password" /><br />
				<input type="submit" class="btn" value="Connection" />
			</div>
		</form>
	</div>
	<div class="col-md-2"></div>
	</div>
</div>
<?php
	}
}
?>
</body>
</html>


