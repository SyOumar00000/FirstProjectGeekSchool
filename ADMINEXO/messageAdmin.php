<?php include 'entete.php'; ?>
<?php 
     include '../config.php';
    //recuperer les infos de la table users
 $queryUsers = 'SELECT * FROM users ORDER BY id ASC';
 $MqueryUsers = mysqli_query($conn,  $queryUsers) or die('Erreur SQL !'. $queryUsers.'</br>'.mysqli_error());
    // 
     //requete pour recuperer l'id de l'users
     $recepteur = "SELECT * FROM users WHERE status = 0";
     $usersrecup = mysqli_query($conn, $recepteur);
      $recue = mysqli_fetch_array($usersrecup);
    if(isset($_POST['envoie']))
    {
      if($_POST['titre_message']!='' && $_POST['le_message']!='')
      {
         $idUsers = $infoUsers['id'];//recuperation de l'id de l'utilisateur actuellement connecté
        $dest =$_POST['dest'];//recuperation de l'id du destinataire qui est un users quelconque 
        $titre_message =$_POST['titre_message'];//recuperation du titre du sms
        $le_message=$_POST['le_message'];//recuperation du sms
        $status= '0'; //status par defaut est a zero(status 0 =users et status 1 =  admin)
        $rqete = "INSERT INTO mesmessages(titre_message, le_message, status, id_destinataire, id_expediteur) VALUES('$titre_message','$le_message', '$status', '$dest', ' $idUsers')";
        $smsquery = mysqli_query($conn, $rqete) or die ('erreur sql !'.$rqete.'<br>'.mysqli_error($conn));
      }else
      {
        echo " veuillez remplir tout les champs";
      }
    }



?>
<div class="container">
<div class="row">
        <div class="col-md-4 col-lg-4  surcotéG">
                <br>
                <form action="" method ='post'>
                  <label for="titre" style="color:black;">le titre du message</label>
                  <br>
                  <input type="text" name="titre_message">
                  <br>
                  <label for="dest" style="color:black;">le destinataire</label>
                  <br>
                  <select class="idest" name="dest" placeholder="choisir le destinataire">
                          <option selected disabled> Destinataire ?</option>
                          <?php while($infoUsers=mysqli_fetch_array( $MqueryUsers)){ ?>
                          <option value="<?php  echo($infoUsers['id']);?>" required><?php echo ($infoUsers['username']); ?></option>
                          <?php } ?>
                        </select>
                  <br>
                  <label for="msg" style="color:black;">le message a envoyer </label>
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
                $id = $infoUsers['id'];
            // requete pour recuperer tout les champs dans message
               $rGetSms ="SELECT * FROM mesmessages WHERE id_expediteur='$id'";
               $gettingSMS = mysqli_query($conn, $rGetSms);
               ?>           
                <!-- requete pour afficher tout les sms  -->
                <center><H1>BOITE D'ENVOI</H1></center>
                <?php while ($fetchsms = mysqli_fetch_array($gettingSMS)) {
                 $idest = $fetchsms['id_destinataire'];
                 $user= "SELECT * FROM users WHERE id = '$idest'";
                 $userquery = mysqli_query($conn, $user);
                 $userow = mysqli_fetch_array($userquery);
                 $nom = $userow['username'];
                ?>              
               <div class="row" style="border:1px solid black;">
                   <div class="col-md-4 col-lg-4">
                       <h5><?=$fetchsms['titre_message']?></h5>
                  </div>
                  <div class="col-md-4 col-lg-4">
                  <h5><?=$fetchsms['le_message']?></h5>
                  </div>
                  <div class="col-md-4 col-lg-4">
                  <h5><?=$nom?></h5>
                  </div>             
               </div>
                <?php }?>
                <center><H1>BOITE DE RECEPTION</H1></center>
                <?php
                  //selectione l'id de l'admin
                  $test = "SELECT * FROM users WHERE status = 1";
                  $recuptest = mysqli_query($conn, $test);
                  $prendre =  mysqli_fetch_array($recuptest) ;
                  $idAD = $prendre['id'];
                 //je selectionne tout les sms qui me son destinés
                 $moi = "SELECT * FROM mesmessages WHERE id_destinataire = $idAD";
                 $messms = mysqli_query($conn, $moi);
                 while($fetchmessms = mysqli_fetch_array($messms))
                 {
                   $smsparuser = "SELECT * FROM mesmessages WHERE "
                   ?>
                  <div class="row" style="border:1px solid black;">
                  <div class="col-md-4 col-lg-4">
                      <h5><?=$fetchmessms['titre_message']?></h5>
                 </div>
                 <div class="col-md-4 col-lg-4">
                 <h5><?=$fetchmessms['le_message']?></h5>
                 </div>
                 <div class="col-md-4 col-lg-4">
                 <h5><?=$nom?></h5>
                 </div>             
              </div>

                <?php } ?>
		    </div>
    </div>
    </div> 


</div>

<?php include 'footer.php'; ?>