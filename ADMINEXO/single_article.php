<?php session_start(); ?>
<?php include('entete.php'); ?> 
  <?php 
    require_once'database.php'; 
    require_once'function.php';  
     //$articles = getarticles($bd,1, $_GET['id']);
     $ide = $_GET['id'];
  ?>
  <?php 
   $req = $bd->query("SELECT * FROM articles WHERE articles.id= '$ide' ");
     $article = $req->fetchAll();
    foreach($article as $articles) :?>
            <div class="row">
               <center> <h1>Bienvenue dans votre espace d'achat</h1></center>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="panel panel-default" >
                                  <div class="panel-heading">
                                          <div class="card">
                                            <center> <img class="card-img-top" src="imageSenegal/<?= $articles['image']?>" alt="Card image" style="margin-Left:-4px;" ></center>
                                          </div>
                                  </div>
                             </div>
                  </div>
                  <!-- deuxieme -->
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">       
                      <h2 class="th2"style="color:#196331;"><?= $articles['nom']?></span></h2>
                      <h5><?= $articles['prixUnitaire']?> FRANCS CFA </h5>
                      <br>
                        <h4 class="card-title"><?= $articles['content']?><br/><br>
                        par:<?= $articles['auteur']?></h4> 
                        <br><br>  
                        <a href="../index.php">
                             <button class="btn btn-primary" type="submit" name="payer">                     
                                       retour    
                             </button>
                          </a> 
                        <br><br>
                    <?php  if(isset($_SESSION['username']) AND !empty($_SESSION['username'])) : ?>
                        <div class="row">                           
                          <a href="../FormAchat.php?id=<?= $articles['id']?>">
                              <button class="btn btn-primary" type="submit" name="payer">                     
                              ACHETER    
                              </button>
                          </a>                             
                        </div>  
                    <?php endif ?>     
                    <br><br> 
                    </div>
                    <?php   if(isset($_SESSION['oumar sy']) AND !empty($_SESSION['oumar sy'])) : ?>
                        <div class="row">   
                             <div class="col-md-3 col-lg-3">
                              <a href="modifier_articles.php?id=<?= $articles['id']?>">
                                  <button class="btn btn-warning" type="submit" name="payer">                     
                                      MODIFIER   
                                  </button>
                              </a> 
                             </div> 
                             <div class="col-md-3 col-lg-3">
                              <a href="delete_articles.php?id=<?= $articles['id']?>">
                                  <button class="btn btn-danger" type="submit" name="payer">                     
                                       SUPPRIMER    
                                  </button>
                              </a> 
                             </div>  
                             <div class="col-md-3 col-lg-3">
                              <a href="messageAdmin.php">
                                  <button class="btn btn-success" type="submit" name="sms">                     
                                       ESPACE MESSAGE  
                                  </button>
                              </a> 
                             </div> 
                             <div class="col-md-3 col-lg-3">
                              <a href="../deconnexion.php?id=<?= $articles['id']?>">
                                  <button class="btn btn-warning" type="submit" name="payer">                     
                                       SE DECONNECTER  
                                  </button>
                              </a> 
                             </div>                        
                         
                             </div>    
                        </div>  
                    <?php endif ?> 
             </div>
               
           <?php endforeach ?>
<?php include('../footer.php'); ?>