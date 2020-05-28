<?php session_start(); ?>
<?php include('entete.php'); ?>
  
  <?php 
    require_once'database.php'; 
    require_once'function.php';  
     $articles = getarticles($bd,1, $_GET['id']);
     if(!isset($_GET['id'])){
        header('location:../index.php');  
     }
     if(!isset($_SESSION['oumar sy']) || empty($_SESSION['oumar sy'])){
         header('location:../index.php');
     }

     if(isset($_POST) AND !empty($_POST)){
         if(!empty($_POST['nom']) AND !empty($_POST['content']) AND !empty($_POST['auteur'])){
             $req = $bd->prepare('UPDATE articles SET nom= :nom, content= :content, auteur= :auteur WHERE id= :id');
             $req->execute([
                'nom'=> $_POST['nom'],
                'content'=> $_POST['content'],
                'auteur'=> $_POST['auteur'],
                'id'=> $_GET['id']
             ]);
             $_SESSION['flash']['success'] = 'l\'article a été modifié  et posté !';
         }else{
            $_SESSION['flash']['error'] = ' champs manquants';
         }
     }
  ?>
  <div class="container">
        <div class="row">
            <div class="col-md-2 col-lg-2 hidden-xs hidden-sm"></div>
            <div class="col-md-8 col-lg-8 hidden-xs hidden-sm">
                <h3>Modifier l'article "<?= $articles->nom ?>"</h3>
                <h4>Laisser vide si aucun changement il y'a!!!</h4>
                <?php 
                if(isset( $_SESSION['flash']['success'])){
                    echo"<div class='success'>".$_SESSION['flash']['success'].'</div>';
                }elseif(isset( $_SESSION['flash']['error'])){
                    echo"<div class='error'>".$_SESSION['flash']['error'].'</div>';
                }
                ?>
                <form action="" method="POST">
                     <h4>Le nom:</h4>
                     <input type="text" name="nom" value="<?= $articles->nom ?>"/>
                     <h4>L'Image:</h4>
                     <input type="text" name="image" value="<?= $articles->image ?>"/>
                     <h4>Le contenu:</h4>
                     <input type="text" name="content" value="<?= $articles->content ?>"/>
                     <h4>Le Statut:</h4>
                     <input type="text" name="actif" value="<?= $articles->actif ?>"/>
                     <h4>Le nom:</h4>
                     <input type="text" name="auteur" value="<?= $articles->auteur ?>"/>
                     <button>Modifier</button>
                     <button><a href="../index.php">RETOUR</a></button>
                </form>
            </div>
            <div class="col-md-2 col-lg-2 hidden-xs hidden-sm"></div>
        </div>
  </div>




<?php include('../footer.php'); ?>