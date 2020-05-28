<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="design.css" rel="stylesheet" title="Style" />
		<!-- <link href="style.css" rel="stylesheet" title="Style" /> -->
        <!-- <link href="rebuild.css" rel="stylesheet" title="Style" /> -->
		<title>Inscription</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="formAchatstyle.css">
    </head>
    <body>
	<!-- ici ajout du header -->
	<div class="container-fluid moncorps">
        <div class="head">
           <div class="row matete">
              <div class="col-md-12">
               <!-- mon logo qui es juste contituer de mon nom -->

              <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                    <a class="navbar" href="#"> <h1> W-<i class="fas fa-shoe-prints"></i>shoes </h1></a>
                    </div>
                   <form class="navbar-form  navbar-right" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="recherche" name="search" style="width:95px;margin-right:20px;margin-top:5px;">
                        </div>
                        <button type="submit" class="btn btn-default" style="width:95px;margin-right:20px;">Envoyer</button>
                   </form>
                </div>
              </nav>
            </div>
        </div>
    </div>

<?php
//On verifie que le formulaire a ete envoye
if (isset($_POST['valider']))
{
	//On enleve lechappement si get_magic_quotes_gpc est active
	if(get_magic_quotes_gpc())
	{
		$_POST['username'] = stripslashes($_POST['username']);
		$_POST['password'] = stripslashes($_POST['password']);
		$_POST['passverif'] = stripslashes($_POST['passverif']);
		$_POST['email'] = stripslashes($_POST['email']);
		$_POST['avatar'] = stripslashes($_POST['avatar']);
	}
	//On verifie si le mot de passe et celui de la verification sont identiques
	if($_POST['password']==$_POST['passverif'])
	{
		//On verifie si le mot de passe a 6 caracteres ou plus
		if(strlen($_POST['password'])>=6)
		{
			//On verifie si lemail est valide
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
			{
				//On echape les variables pour pouvoir les mettre dans une requette SQL
				$username = mysqli_real_escape_string($conn, $_POST['username']);
				$password = mysqli_real_escape_string($conn, $_POST['password']);
				$email = mysqli_real_escape_string($conn, $_POST['email']);
        //les leux lignes du bas stock mon image dans $avatar et recupere limage temporairement dans $filetmpname
        $avatar = $_FILES['avatar']['name'];
        $filetmpname = $_FILES['avatar']['tmp_name'];
        // dans $folder je stock le dossier dans lequel mes images vont etre telechargées
        $folder = "IMAGES/";
        // fonction pour sauvegarder les images dans un dossier specific $folder
        move_uploaded_file($filetmpname, $folder.$avatar);
				//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
				$dn = mysqli_num_rows(mysqli_query($conn, 'select id from users where username="'.$username.'"'));
				if($dn==0)
				{
    					//On recupere le nombre dutilisateurs pour donner un identifiant a lutilisateur actuel
    					$dn2 = mysqli_num_rows(mysqli_query($conn, 'select id from users'));
    					$id = $dn2+1;
    					//On enregistre les informations dans la base de donnee
if(mysqli_query($conn, 'insert into users(id, username, password, email, avatar) values('.$id.', "'.$username.'", "'.$password.'", "'.$email.'", "'.$avatar.'")'))
    					{
    						//Si ca a fonctionne, on naffiche pas le formulaire
    						$form = false;
              ?>
              <div class="message" style="text-align:center; margin-top:30px; color:white;">Vous avez bien &eacute;t&eacute; inscrit. Vous pouvez dor&eacute;navant vous connecter.<br />
               <a href="connexion.php">Se connecter</a></div>
              <?php
    					}
    					else
    					{
    						//Sinon on dit quil y a eu une erreur
    						$form = true;
    						$message = 'Une erreur est survenue lors de l\'inscription.';
    					}
				}
				else
				{
					//Sinon, on dit que le pseudo voulu est deja pris
					$form = true;
					$message = 'Un autre utilisateur utilise d&eacute;j&agrave; le nom d\'utilisateur que vous d&eacute;sirez utiliser.';
				}
			}
			else
			{
				//Sinon, on dit que lemail nest pas valide
				$form = true;
				$message = 'L\'email que vous avez entr&eacute; n\'est pas valide.';
			}
		}
		else
		{
			//Sinon, on dit que le mot de passe nest pas assez long
			$form = true;
			$message = 'Le mot de passe que vous avez entr&eacute; contien moins de 6 caract&egrave;res.';
		}
	}
	else
	{
		//Sinon, on dit que les mots de passes ne sont pas identiques
		$form = true;
		$message = 'Les mots de passe que vous avez entr&eacute; ne sont pas identiques.';
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
    <form action="sign_up.php" method="post"  enctype="multipart/form-data">
      <center><h1>  Veuillez remplir ce formulaire pour vous inscrire:</h1></center><br />
        <div class="body-content">
            <label for="username">Nom d'utilisateur</label><br />
            <input type="text" required name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="password">Mot de passe<span class="small">(6 caract&egrave;res min.)</span></label><br />
            <input type="password" required name="password" /><br />
            <label for="passverif">Mot de passe<span class="small">(v&eacute;rification)</span></label><br />
            <input type="password" required name="passverif" /><br />
            <label for="email">Email</label><br />
            <input type="text" required name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="avatar">votre avatar</label><br />
            <input type="file" required name="avatar" value="<?php if(isset($_POST['avatar'])){echo htmlentities($_POST['avatar'], ENT_QUOTES, 'UTF-8');} ?>" /><br /><br />
            <input type="submit" name="valider" class="btn" value="Envoyer" />
			<br>
			<center>
			<br><br>
			<a href="connexion.php">cliquez <em> ICI</em> si vous vous etes deja enregisté !</a>
			</center>
		</div>
	
    </form>
</div>
<?php
}
?>

<div class="container-fluid monpied">
<div class="row pied">
          <div class="col-md-3">
          </div>

          <div class="col-md-6 foot">
            <!-- copyright et les logaux des reseaux sociaux -->
            <span><i class="fab fa-facebook-f"></i></span>
            <span><i class="fab fa-whatsapp"></i></span>
            <span><i class="fab fa-twitter"></i></span>
            <span><i class="fab fa-linkedin-in"></i></span>
          <p>copyright@_IGS_DEVELOPERS_WEB_AND_MOBILE</p>

          </div>
          <div class="col-md-3">
          </div>
        </div>

</div>
    </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
        <script src="jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="JavaScript.js"></script>

</body>
</html>
