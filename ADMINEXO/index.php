<?php session_start();?>
<?php require_once'database.php';


 $req = $bd->query('SELECT * FROM administrateur');
 $user = $req->fetch();
?>
<?php include'../entete.php'; ?>
  <div class="container">
      <div></div>
      <br>
   <?php 
  
      $req = $bd->query('SELECT * FROM articles');
      $article = $req->fetchAll();
      foreach($article as $articles) :?>
         <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="panel panel-default" >
                   <div class="panel-heading">
                     <h2 class="th2"style="color:#196331;"><?= $articles['nom']?></span></h2>

                    <div class="card">
                         <img class="card-img-top" src="../imageSenegal/G2.jpg" alt="Card image" style="margin-Left:-4px;" >
                         <br>
                         <br>
                         <a href="single_article.php?id=<?= $articles['id']?>"  class="btn btn-default btn-sy"  >LIRE PLUS</a>
                         <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>
                   </div>
                   </div>

                   <div  class="panel-body collapse" id="GD">
                     <div class="card-body">
                          <h4 class="card-title"><?= $articles['content']?><br/>par:<?= $articles['auteur']?></h4>
                          


                     </div>
                   </div>
                   </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="panel panel-default" >
                   <div class="panel-heading">
                     <h2 class="th2"style="color:#196331;"><?= $articles['nom']?></span></h2>

                    <div class="card">
                         <img class="card-img-top" src="../imageSenegal/G2.jpg" alt="Card image" style="margin-Left:-4px;" >
                         <br>
                         <br>
                         <a href="single_article.php?id=<?= $articles['id']?>" class="btn btn-default btn-sy" >LIRE PLUS</a>
                         <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>
                   </div>
                   </div>


                   <div  class="panel-body collapse" id="GD">
                     <div class="card-body">
                          <h4 class="card-title"><?= $articles['content']?><br/>par:<?= $articles['auteur']?></h4>
                          


                     </div>
                   </div>
                   </div></div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="panel panel-default" >
                   <div class="panel-heading">
                     <h2 class="th2"style="color:#196331;"><?= $articles['nom']?></span></h2>

                    <div class="card">
                         <img class="card-img-top" src="../imageSenegal/G2.jpg" alt="Card image" style="margin-Left:-4px;" >
                         <br>
                         <br>
                         <a href="single_article.php?id=<?= $articles['id']?>"  class="btn btn-default btn-sy" >LIRE PLUS</a>
                         <a  class="btn btn-default btn-sy" id="myBtn2" href="" data-toggle="collapse">ACHETER</a>
                   </div>
                   </div>


                   <div  class="panel-body collapse" id="GD">
                     <div class="card-body">
                      <h4 class="card-title"><?= $articles['content']?><br/>par:<?= $articles['auteur']?></h4>
                     </div>
                   </div>
                   </div>
         </div>

         
         </div>
      <?php endforeach ?>
   </div>
<?php include'../footer.php'; ?>
