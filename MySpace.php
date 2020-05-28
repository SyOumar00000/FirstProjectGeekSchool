<?php
$id =$_GET['id'];
include('config.php');
$aff = "SELECT * FROM users WHERE id='$id'";
$affquery = mysqli_query($conn, $aff);
$row = mysqli_fetch_array($affquery);;
?>
      <?php 
        require_once'ADMINEXO/database.php'; 
        require_once'ADMINEXO/function.php';  
        $id = $_GET['id'];
        $req4 = $bd->query("SELECT * FROM users WHERE id= '$id' ");
        $user = $req4->fetchAll();
        if(isset($_POST) AND !empty($_POST)){
            if(!empty($_POST['username']) AND !empty($_POST['password']) AND !empty($_POST['email']) AND !empty($_POST['avatar'])){
                $req1 = $bd->prepare('UPDATE users SET username= :username, password= :password, email= :email, avatar= :avatar WHERE id= :id');
                $req1->execute([
                    'username'=> $_POST['username'],
                    'password'=> $_POST['password'],
                    'email'=> $_POST['email'],
                    'avatar'=> $_POST['avatar'],
                    'id'=> $_GET['id']
                ]);
                $_SESSION['flash']['success'] = 'l\'information a été modifié  et posté !';
            }else{
                $_SESSION['flash']['error'] = ' champs manquants';
            }
        }
        //requete pour recuperer l'id de l'admin
        $adm = "SELECT * FROM users WHERE status=1";
        $admirecup = mysqli_query($conn, $adm);
         $recue = mysqli_fetch_array($admirecup);
        // debut de requetes pour les sms
        if(isset($_POST['envoie']))
        {
          if($_POST['titre_message']!='' && $_POST['le_message']!='' )
          {
            $id =$_GET['id'];//recuperation de l'id de l'utilisateur actuellement connecté
            $dest =$_POST['dest'];//recuperation de l'id du destinataire qui est ladmin 
            $titre_message =$_POST['titre_message'];//recupeation du titre du sms
            $le_message=$_POST['le_message'];//recuperation du sms
            $status= '0'; //status par defaut est a zero(status 0 =users et status 1 =  admin)
            $rqete = "INSERT INTO mesmessages(titre_message, le_message, status, id_destinataire, id_expediteur) VALUES('$titre_message','$le_message', '$status', '$dest', $id)";
            $smsquery = mysqli_query($conn, $rqete) or die ('erreur sql !'.$rqete.'<br>'.mysqli_error($conn));
          }else
          {
            echo " veuillez remplir tout les champs";
          }
        }
        //fin de la requette
      ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>rebuild</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="formAchatstyle.css">
    <!-- <link rel="stylesheet" href="MySpacecss.css">  -->
    <script src="https://kit.fontawesome.com/d6a246da98.js"></script>
  </head>
  <body>
  <div class="container-fluid moncorps">
        <div class="head">
           <div class="row matete">
              <div class="col-md-12">
               <!-- mon logo qui es juste constituer de mon nom -->

              <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                    <a class="navbar" href="#"> <h1> W-<i class="fas fa-shoe-prints"></i>shoes </h1></a>
                    </div>
                   <form class="navbar-form  navbar-right" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="recherche" name="search" 
                               style="width:95px;margin-right:20px;margin-top:5px;">
                        </div>
                        <button type="submit" class="btn btn-default" style="width:95px;margin-right:20px;">Envoyer</button>
                   </form>
                </div>
              </nav>
            </div>
        </div>
    </div> 
        
    <h1 style="color:white;">
      <center>
      bonjour m.<?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>
           <br>
      bienvenue sur votre espace privee
     
      </center>
    </h1>
    
     <div class="row">
        <div class="col-md-4 col-lg-4  surcotéG">
                <br>
                <form action="" method ='post'>
                  <label for="titre" style="color:white;">le titre du message</label>
                  <br>
                  <input type="text" name="titre_message">
                  <br>
                  <label for="dest" style="color:white;">le destinataire</label>
                  <br>
                  <select name="dest" id="">
                    <option value="<?php  echo( $recue['id']);?>"><?php  echo( $recue['username']);?></option> 
                  </select>
                  <br>
                  <label for="msg" style="color:white;">le message a envoyer </label>
                  <br>
                  <textarea name="le_message" id="le_message" cols="30" rows="10" style="width:100%";></textarea>
                  <br>
                  <center>
                  <input type="submit" class="btn btn-primary" name="envoie" value="Envoyer"> 
                   &nbsp; &nbsp;
                  <input type="reset" class="btn btn-primary" name="annuler" value="Annuler"> 
                  </center>
                </form>
                <br>               
        </div>
        <div class="col-md-8 col-lg-8 surcotéD">
            <?php 
               $id = $_GET['id'];
            // requete pour recuperer tout les champs dans message
               $rGetSms ="SELECT * FROM mesmessages WHERE id_expediteur='$id'";
               $gettingSMS = mysqli_query($conn, $rGetSms);
               ?>
            
                <!-- requete pour afficher tout les sms  -->
                 <center> <h1>boite d'envoi</h1></center>
                  <?php while ($fetchsms = mysqli_fetch_array($gettingSMS)) {
                 $idest = $fetchsms['id_expediteur'];
                 $user= "SELECT * FROM users WHERE id = '$idest'";
                 $userquery = mysqli_query ($conn, $user);
                 $userow = mysqli_fetch_array($userquery);
                 $nom = $userow['username'];
                ?>
               <div class="row">
                   <div class="col-md-4 col-lg-4">
                       <h5><?=$fetchsms['titre_message']?></h5>
                  </div>
                  <div class="col-md-4 col-lg-4">
                  <h5><?=$fetchsms['le_message']?></h5>
                  </div>
                  <div class="col-md-4 col-lg-4">
                  <h5><?=$nom?>
                  </h5>
                  </div>             
               </div>
                <?php }?>
                <center> <h1>boite de reception</h1></center>
                <?php
                  //selectione l'id de l'admin
                  $id = $_GET['id'];
                  $test = "SELECT * FROM users WHERE id = $id ";
                  $recuptest = mysqli_query($conn, $test);
                  $prendre =  mysqli_fetch_array($recuptest) ;
                  $idutil = $prendre['id'];
                  $noms = $prendre['username'];
                 //je selectionne tout les sms qui me son destinés
                 $moi = "SELECT * FROM mesmessages WHERE id_destinataire = $idutil";
                 $messms = mysqli_query($conn, $moi);
                 while($fetchmessms = mysqli_fetch_array($messms))
                 {
                   ?>
                  <div class="row" style="border:1px solid black;">
                  <div class="col-md-4 col-lg-4">
                      <h5><?=$fetchmessms['titre_message']?></h5>
                 </div>
                 <div class="col-md-4 col-lg-4">
                 <h5><?=$fetchmessms['le_message']?></h5>
                 </div>
                 <div class="col-md-4 col-lg-4">
                 <h5><?=$noms?>
                 </h5>
                 </div>             
              </div>

                <?php } ?>

		    </div>
    </div>
    </div> 
    <br>
  
    <div class="row">
        <div class="col-md-3 col-lg-3 surcotéG">
        <h3 class="paragraphe" style="color:white"> Mon Compte =></h3>
       </div>
        <div class="col-md-8 col-lg-8 surcotéD">
                <h3>Modifier vos informations</h3>
                <h4>Laisser vide si aucun changement il y'a!!!</h4>
                <?php 
                if(isset( $_SESSION['flash']['success'])){
                    echo"<div class='success'>".$_SESSION['flash']['success'].'</div>';
                }elseif(isset( $_SESSION['flash']['error'])){
                    echo"<div class='error'>".$_SESSION['flash']['error'].'</div>';
                }
                ?>
                 <form action="" method="POST">
                     <h4>votre nom:</h4>
                     <input type="text" name="username" value="<?php  echo($row['username']);?>"/>
                     <h4>Votre Mot de Passe:</h4>
                     <input type="text" name="password" value="<?php echo($row['password']);?>"/>
                     <h4> Votre Addresse Email:</h4>
                     <input type="text" name="email" value="<?php echo($row['email']);?>"/>
                     <h4>Votre Avatar:</h4>
                     <input type="text" name="avatar" value="<?php echo($row['avatar']);?>"/>
                     <br>
                     <center> <img class="card-img-top" src="IMAGES/<?php echo($row['avatar']);?>" alt="Card image" style="width:50px; height:50px;" ></center>
                     <br>
                     <button>Modifier</button>
                     <button><a href="../index.php">RETOUR</a></button>
                </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 col-lg-3 surcotéG">
        <h3 class="paragraphe" style="color:white"> Mes Commandes effectuées =></h3>
        </div>
        <div class="col-md-8 col-lg-8 surcotéD">
        <?php 
              $idUsers = $_SESSION['userid'];
            // requete pour recuperer tout les champs dans mesachats
               $rGetAchat ="SELECT * FROM mesachats WHERE id_acheteur='$idUsers'";
               $gettingAchat = mysqli_query($conn, $rGetAchat);
               ?>           
                <!-- requete pour afficher tout les achats  -->
                  <?php while ($fetchAchat = mysqli_fetch_array($gettingAchat)) {
                 $idAcheteur = $fetchAchat['id_acheteur'];
                 $user= "SELECT * FROM users WHERE id = '$idAcheteur'";
                 $userquery = mysqli_query ($conn, $user);
                 $userA = mysqli_fetch_array($userquery);
                 $nom = $userA['username'];
                ?>              
               <div class="row">
                   <div class="col-md-2 col-lg-2">
                       <h5> <b>le libelle</b> <br><br><?=$fetchAchat['nom_articles_acheter']?></h5>
                  </div>
                  <div class="col-md-2 col-lg-2">
                  <h5><b>prix unitaire</b> <br><br><?=$fetchAchat['prixU']?></h5>
                  </div>
                  <div class="col-md-2 col-lg-2">
                  <h5><b>la quantité</b> <br><br><?=$fetchAchat['nbreAchat']?></h5>
                  </div>
                  <div class="col-md-3 col-lg-3">
                  <h5><b>montant total</b> <br><br><?=$fetchAchat['totalAbuy']?></h5>
                  </div>
                  <div class="col-md-3 col-lg-3">
                  <h5><b>votre nom</b> <br><br><?=$nom?></h5>
                  </div>             
               </div>
                <?php }?>
        </div>
    </div>
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