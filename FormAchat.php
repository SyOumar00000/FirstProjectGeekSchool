<?php  
    include('config.php'); 
    // session_start();
     if(isset($_POST['boutonAchat']))
    {
        if(!isset($_SESSION['username']))
        {
            header ('Location: sign_up.php');
        }
        else
        {
            header ('Location: FormAchat.php');
        }
  } 
    //je recupere lid de larticle qui a ete selectionné
    $ide = $_GET['id']; 
    //je requete toute les infos concernant larticle qui a été choisie et je fetch cela.  
   $req3 = $bd->query("SELECT * FROM articles WHERE articles.id= '$ide' ");
   $article = $req3->fetchAll();
   //si on valide l'achat
   if(isset($_POST['validAchat']))
   {
     $prixU = $_POST['prixU'];
     $nbreAchat = $_POST['nbreAchat'];
     $totalAbuy = $_POST['totalAbuy'];
     $cnumber = $_POST['cnumber'];
     $cvc = $_POST['cvc'];
     $libelle = $_POST['libelle'];
     $idUsers = $_SESSION['userid'];
    $totalCalcul= $prixU*$nbreAchat;
     //requete pour envoyer ces infos dans ma bd
     $envoi ="INSERT INTO mesachats(nom_articles_acheter, prixU, nbreAchat, totalAbuy,Cnumber,cvc, id_acheteur) VALUES('".$libelle."', '".$prixU."', '".$nbreAchat."', '".$totalCalcul."', '".$cnumber."',  '".$cvc."', '".$idUsers."')";
     $envoyer =mysqli_query($conn,$envoi);
     header('location:validationachat.php');
   }
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
    <script src="https://kit.fontawesome.com/d6a246da98.js"></script>
  </head>
  <body>
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
            <center  style="color:white;">
                <h1>Bienvenue
                <?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>
                 merci pour votre confiance</h1>
            </center>
<div class="container-fluid">
   <div class="row monformulairedachat">
        <div class="col-md-3 col-lg-3 hidden-xs hidden-sm"></div>

        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 fAchat"  style="color:white;">
            <center><h1>ACHETER VOTRE ARTICLE</h1></center>
             <form action="" method="post">
             <label for="libelle" style="color:white;"> le libellé de l'article :</label> 
             <input type="text" name="libelle" id="nomarticle"  value="<?php foreach($article as $articles) { echo $articles['nom'];}?>" style="color:black;">
                 <br>
             <label for="prix" style="color:white;"> prix unitaire de l'article :</label> 
                 <br>
                 <input type="text" name="prixU" id="punitaire" value="<?php foreach($article as $articles) { echo $articles['prixUnitaire'];}?>" style="color:black;">
                 <br>
                 <label for="quantiteArticle"  style="color:white;"> Combien en voulez-vous ?</label> 
                 <br>
                 <input type="text" name="nbreAchat" id="nbreacheter" onKeyUp="argent()" value="" style="color:black;">
                 <br>
                 <label for="valeur"  id="total"  style="color:white;"> Montant Total a regler en cas de validation :</label> 
                 <br>
                 <input type="text" name="totalAbuy" id="totalMontant" value="" disabled="disabled" style="color:black;">
                 <br>
                 <label for="nom" name="nom"  style="color:white;"> Saisissez le numero de votre  Carte Prepayee :</label> 
                 <br>
                 <input type="text" name="cnumber" value=""  style="color:black;">
                 <br>
                 <br>
                 <label for="numcvc" name="numcvc"  style="color:white;"> Saisissez le numero CVC :</label> 
                 <br>
                 <input type="text" name="cvc" value=""  style="color:black;">
                 <br>
                <center  style="color:black;"> 
                <a href="FormAchat">
                <button class="btn btn-primary"  type="submit" name="validAchat" >
                valider
                </button>
                </a>
                </center> 
             </form>
            
        </div>
        <div class="container">
                <div class="row">
                    <div class="wrap-loading">
                      <div class="loading loading-1"></div>
                  </div>
                </div>
              </div>
        <div class="col-md-3 col-lg-3 hidden-xs hidden-sm"></div>
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
              <script>
      $('#btn-one').click(function() {
  $('#btn-one').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
});
          </script>
         <script type="text/javascript">
            function argent()
            {     
              var Punique= document.getElementById("punitaire").value ;
              var qte = document.getElementById("nbreacheter").value;
              var montant = qte*Punique;
                document.getElementById("totalMontant").value = montant;
            } 
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
        <script src="jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="JavaScript.js"></script>
       

 </body>
 </html>

