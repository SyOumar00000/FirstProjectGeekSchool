<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css_du_form.css">
    <script src="https://kit.fontawesome.com/d6a246da98.js"></script>
          </head>
         <body>
<?php include "connect.php"; ?>
           <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">connectez-vous avant toutes action svp </h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin"  action="testconnexion.php" method="POST">
                <input type="text" id="email" name="email" class="form-control" placeholder="adresse email" required autofocus>
                <input type="password"  id="password" name="password" class="form-control" placeholder="Mot de pass" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="Valider">
                    Valider</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                  Se Souvenir de Moi
                </label>
                <a href="#" class="pull-right need-help">Besoin d'aide? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="forminfo.html" class="text-center new-account">Creer un compte </a>
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
</html>
