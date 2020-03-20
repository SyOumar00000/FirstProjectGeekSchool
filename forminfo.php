<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulaire de renseignement</title>
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
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Veuillez vous inscrire svp!</legend>
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
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox1" value="Homme"/>
                Homme
            </label>
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox2" value="Femme"/>
                Femme
            </label>
            <label for="" name="dat_naiss">
                Date de Naissance</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="dat_naiss">
                        <option value="0">Mois</option>
                        <option value="1">Janvier</option>
                        <option value="2">Fevrier</option>
                        <option value="3">Mars</option>
                        <option value="4">Avril</option>
                        <option value="5">Mai</option>
                        <option value="6">Juin</option>
                        <option value="7">Juillet</option>
                        <option value="8">Aout</option>
                        <option value="9">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Decembre</option>

                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="dat_naiss">
                        <option value="1">01</option>
                          <option value="2">02</option>
                            <option value="3">03</option>
                              <option value="4">04</option>
                                <option value="5">05</option>
                                  <option value="6">06</option>
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="dat_naiss">
                        <option value="0">1989</option>
                          <option value="0">1990</option>
                            <option value="0">1991</option>
                              <option value="0">1992</option>
                                <option value="0">1993</option>
                                  <option value="0">1994</option>
                                    <option value="0">1995</option>
                    </select>
                </div>
            </div>
            <br/>
            <br/>
            <button class="btn btn-lg btn-primary btn-block" type="submit"  name="valider" id="valider">
               Valider
               
             </button>
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

</html>
