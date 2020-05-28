<?php
include('config.php');
?> 
<?php 
    if(isset($_POST['boutonAchat']))
    {
        if(!isset($_SESSION['username']))
        {
            header ('Location:sign_up.php');
        }
        else
        {
            header ('Location:FormAchat.php');
        }
    }
?>
<?php
if (isset($_SESSION['email'])) {
 header ('Location: index.php');
 exit();
}
?>
<?php
include('repeatfolder/entete.php');
?>
									<!-- ici jai ajouter debut -->
									<div class="content">
<?php
//On affiche un message de bienvenue, si lutilisateur est connecte, on affiche son pseudo
?>
Salut <?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>,<br />
<?php
if(isset($_SESSION['username']))
{
?>
<?php
$requete = "SELECT * FROM users";
$mareq = mysqli_query($conn, $requete);
$userquery = mysqli_fetch_array($mareq);
?>

<?php
// requete pour selectionner lutilisateur qui a sa session active
$sql="select * from users where username ='".$_SESSION['username']."'";
if(mysqli_query($conn, $sql))
{
    $res=mysqli_query($conn, $sql);
    //tant que luser est connecté alors on affiche son avatar
    while($row=mysqli_fetch_array($res))
    {
            $image = $row['avatar'];
            echo "<img src='IMAGES/$image' width='35px' height='35px'/>";
            $id;
    }
}
?>
<div class="row">
    <div class="col-md-6">
        <a href="connexion.php">
            <button class="btn btn-warning">
                  D&eacute;connexion       
            </button>
        </a>
    </div>
    <div class="col-md-6">
    <?php
      $res=mysqli_query($conn, $sql);
      $row=mysqli_fetch_array($res);
      

    ?>
        <a href="MySpace.php?id=<?php echo($row['id']);?>">
                <button class="btn btn-primary">
                      Mon Espace 
                </button>
        </a> 
    </div>
</div>

<?php
}
else
{
//Sinon, on lui donne un lien pour sinscrire et un autre pour se connecter
?>
 <div class="row">
      <div class="col-md-6">
            <a href="sign_up.php" style=" color:white;">
               <button class="btn btninscription btn-primary">
                  Inscription
               </button>
            </a>
      </div>
      <div class="col-md-6">
            <a href="connexion.php"style=" color:white;">
               <button class="btn btnseconneter btn-primary">
                   Se connecter
               </button>
            </a>
      </div> 
  </div>

<?php
}
?>
</div>

									<!-- ici jai terminé lajout -->

            </div>
          </div>
        </main>


      </header>
  </div>
</nav>
  <!-- menujolie -->


           </div>

        </div>

              <div class="row " style="margin-top:25px;">

                  <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 ">
                       <div id="imagecarousel" class="carousel slide"  data-wrap="true" data-pause="false" data-interval="2000"
                       data-ride="carousel">
                       <ol class="carousel-indicators">
                           <li data-target="#imagecarousel" data-slide-to="0" class="active"></li>
                           <li data-target="#imagecarousel" data-slide-to="1"></li>
                           <li data-target="#imagecarousel" data-slide-to="2"></li>
                           <li data-target="#imagecarousel" data-slide-to="3"></li>
                           <li data-target="#imagecarousel" data-slide-to="4"></li>

                       </ol>

                              <div class="carousel-inner">
                                  <div class="item active">
                                   <img src="imageSenegal/freepik1.jpg" class="img-responsive" />
                                      <div class="carousel-caption">
                                            <h3></h3>
                                            <p></p>
                                       </div>
                                  </div>
                                  <div class="item">
                                    <img src="imageSenegal/D.jpg" class="img-responsive"/>
                                       <div class="carousel-caption">
                                            <h3></h3>
                                            <p> </p>
                                       </div>
                                  </div>
                                  <div class="item">
                                    <img src="imageSenegal/D2.jpg" class="img-responsive"/>
                                       <div class="carousel-caption">
                                            <h3></h3>
                                            <p></p>
                                       </div>
                                  </div>
                                  <div class="item">
                                    <img src="imageSenegal/freepik4.jpg" class="img-responsive" />
                                       <div class="carousel-caption">
                                            <h3></h3>
                                            <p></p>
                                       </div>
                                  </div>
                                  <div class="item">
                                    <img src="imageSenegal/freepik5.jpg" class="img-responsive"/>
                                       <div class="carousel-caption">
                                            <h3></h3>
                                            <p></p>
                                       </div>
                                  </div>
                              </div>
                              <a href="#imagecarousel" class="carousel-control left" data-slide="prev">
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   </a>
                                   <a href="#imagecarousel" class="carousel-control right" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>

                       </div>

              </div>
              <!-- je met un slider concernant un site de vente de chaussure -->
            </div>


        <hr class="tirait" id="slog">
        <div class="row slogant">
          <div class="col-md-2 col-lg-3 col-sx-12 col-sm-12 xs-hidden sm-hidden"></div>
          <div class="col-md-8">
              <h2>ICI SE CHAUSSER EST MIEUX QUE MANGER</h2>
              <h2>C'EST LA CHAUSSURE  QUI FAIT L'HOMME... </h2>
          </div>
          <div class="col-md-2 col-lg-3 col-sx-12 col-sm-12 xs-hidden sm-hidden"></div>

        </div>
        <!-- ici sa commence -->
       <!--  debut des articles a poster ici !! -->
 <?php 
 $req = $bd->query('SELECT * FROM administrateur');
 $user = $req->fetch();
?>
  <div class="container">
      <div></div>
      <br>
             <?php 
            $req = $bd->query('SELECT * FROM articles WHERE actif = 1');
            $article = $req->fetchAll(); 
            foreach($article as $articles) :?>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default" >
                              <div class="panel-heading">
                                      <h2 class="th2"style="color:#196331;"><?= $articles['nom']?></span></h2>

                                      <div class="card">
                                         <center> <img class="card-img-top" src="imageSenegal/<?= $articles['image']?>" alt="Card image" style="margin-Left:-4px;" ></center>
                                          <h5><?= $articles['prixUnitaire']?> FRANCS CFA </h5>
                                          <a href="ADMINEXO/single_article.php?id=<?= $articles['id']?>" class="btn btn-default btn-sy" name="lecture">
                                             LIRE PLUS
                                          </a>
                                          <div class="row">
                                            
                                              <form action="" method="post">
                                              <a href="FormAchat.php?id=<?= $articles['id']?>">
                                              <button class="btn btn-primary" type="submit" name="boutonAchat" style="width:330px; margin-top:-150px;margin-left:-75px;">
                                                  ACHETER
                                              </button>
                                              </a>
                                              </form>  
                                                                                      
                                          </div>
                                      </div>
                              </div>
                              <div  class="panel-body collapse" id="GD">
                                      <div class="card-body">
                                            <h4 class="card-title"><?= $articles['content']?><br/>par:<?= $articles['auteur']?></h4>                                 
                                      </div>
                              </div>
                        </div>
              </div>
           <?php endforeach ?>
      </div>
       <!--   la fin des articles a poster ici !! -->
          <br>
          <br>
          <hr>
          <div class="row" id="msg">
               <div class=" col-md-12 col-lg-12 col-xs-12 col-sm-12">
                  <div class="container">
  <h2 class="text-center" style="color: white;"> ENVOYER NOUS UN MAIL CI-POSSIBLE</h2>
  <div class="row justify-content-center">
  <div class="col-12 col-md-8 col-lg-6 pb-5">
  <!--Form with header-->
      <div class="container">
            <form class="form-horizontal" >
              <div class="form-group">
                <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 hidden-xs hidden-sm">

                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
            <input type="text" class="form-control contacted" id="lenom" name="le_nom" placeholder=" Veuillez saisir votre nom svp">
          <input type="text" class="form-control contacted" id="mail" name="le_mail" placeholder=" Veuillez saisir votre adresse email svp">
          <textarea  class="form-control contacted" id="le_texte" placeholder=" Veuillez saisir votre message"></textarea>
           <center> <button type="submit" class="btn btn-default send">Envoyer</button></center>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 hidden-xs hidden-sm"></div>

              </div>
            </form>
           </div>
         </div>
       </div>
      </div>
    </div>

</div>
<?php
include('repeatfolder/footer.php');
?>
