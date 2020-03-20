<?php
if (isset($_POST['valider']))
{
 include('connect.php');

   $nom = $_POST['nom'];
   $prenom =$_POST['prenom'];
  $email = $_POST['email'];
  $emailagain =  $_POST['emailagain'];
  $password = $_POST['password'];
  $sex = $_POST['sex'];
  $dat_naiss = $_POST['dat_naiss'];


$sql = 'INSERT into utilisateurs (nom,prenom,email,emailagain,password,sex,dat_naiss)
        VALUES("'.$nom.'", "'.$prenom.'","'.$email.'","'.$emailagain.'","'.$password.'","'.$sex.'","'.$dat_naiss.'")';


$test = mysqli_query($conn, $sql);

if ($test == true) {
 echo "INSERTION REUSSIE ....
 <br>
 <a href=form.php>
   <h1> connectez-vous maintenant ici</h1>
  </a>";

}
else {
 echo "ERREUR ";
}
}

 // recuperer ces infos dans la base de donnees
?>
