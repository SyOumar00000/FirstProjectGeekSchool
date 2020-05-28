<!-- <?php
session_start();
//echo $_SESSION['Name'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulaire de renseignement</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css_du_forminfo.css">
    <script src="https://kit.fontawesome.com/d6a246da98.js"></script>
  </head>
  <body>
<?php include "connect.php"; ?> 
    <div class="container takef">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Veuillez vous enregistrer svp!!!!!!</legend>
            <form action="recup.php" method="POST" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="nom" placeholder=" Votre Nom svp" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="prenom" placeholder="Votre Prenom svp" type="text" required />
                </div>
            </div>
            <input class="form-control" name="email" placeholder="Votre Adresse Email svp" type="email" />
            <input class="form-control" name="emailagain" placeholder="Votre Adresse Email a nouveau svp" type="email" />
            <input class="form-control" name="password" placeholder="Votre Mot de Passe" type="password" />
            <div class="row">
              <div class="col-xs-6 col-md-6">
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox1" value="Homme"/>
                    Homme
                </label>
              </div>
              <div class="col-xs-6 col-md-6">
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox2" value="Femme"/>
                    Femme
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-md-12">
                <label for="info" name="information">date de naissance</label>
                <input class="form-control" name="dat_naiss" type="date" id="naitre"/>
                </div>
                <div class="col-xs-6 "></div>

                </div>
                <br>
                <div class="row">
                  <div class="col-xs-4 col-md-4"></div>
                  <div class="col-xs-4 col-md-4">
              <button class="btn btn-lg btn-primary btn-block" type="submit"  name="Valider" id="valider"> Valider</button>
                  </div>
                  <div class="col-xs-4 col-md-4">
                  </div>
                </div>

                </div>
            </div>
            <br/>
            <br/>

            </form>
        </div>

    </div>
</div>





    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
      <script src="jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>

</html> -->
