<?php
//On demarre les sessions
session_start();

/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/

//On se connecte a la base de donnee
    $conn = mysqli_connect('localhost', 'root','', 'basededonnee');
   $bd = new PDO('mysql:host=localhost;dbname=basededonnee','root','');
   $bd->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);



//Email du webmaster
$mail_webmaster = 'example@example.com';

//Adresse du dossier de la top site
$url_root = 'http://www.example.com/';

/******************************************************
----------------Configuration Optionelle---------------
******************************************************/

//Nom du fichier de laccueil
$url_home = 'index.php';

//Nom du design

?>
