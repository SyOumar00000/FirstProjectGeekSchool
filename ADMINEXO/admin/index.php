<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap.css">
   <link rel="stylesheet" href="../style.css">
   <script src="https://kit.fontawesome.com/d6a246da98.js"></script>
    <title>Page Enregistrement</title>
  </head>
  <body>
  <?php require_once'../database.php';

if(!$_SESSION['oumar sy']){
    header('location:login.php');
}

?>
    <div class="container">
      <div class="row">
            <div class="entete">
                  <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                        <h1>Mon Logo</h1>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                       <div class="menu">
                         <button class="btn btn-primary">MENU</button>
                       </div>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                        <div class="rech">
                        <form action="rechercher.php" method="post">
                          <input type="text" class="recherche" name="username" value="" placeholder="que rechercher vous?">
                          <button class="btn btn-success" name="entrer">Entrez</button>
                          </form>
                        </div>
                  </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4"></div>
                <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                    <h3>
                    bienvenue  <?=$_SESSION['oumar sy']?>
                    </h3>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4"></div>  
        </div>
        <?php 
      $req = $bd->query('SELECT * FROM administrateur');
      $user = $req->fetch();
     
   ?>

        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="footer">
              <br><br>
              <p>
                copyright@_developer_from_IGS_2020
              </p>
            </div>
          </div>
        </div>

    </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
  <script src="../jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>


