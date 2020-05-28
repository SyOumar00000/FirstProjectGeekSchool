<?php

//contrôle si un id est définie (par viewsource.php?id=...)
if (empty($_GET['id']))
{
	die('Erreur, pas d\'id défini');
}

//début des variables à éditer

$host = 'localhost';
$user = 'root';
$pass= '';
$bdd = 'registration';
$table_articles = 'table_articles';

//fin des variables à éditer

  $db = mysql_connect($host, $user, $pass); //connexion à mysql
  mysql_select_db($bdd); //sélection de la base de données

  $query = "SELECT * FROM $table_articles WHERE id='" . $_GET['id'] . "'"; //on sélectionne l'article
  $result = mysql_query($query) or die('Erreur SQL : '.mysql_error());
  $val = mysql_fetch_array($result); //on récupère les résultats

  echo '<center><h2>'.$val['titre'].'</h2> par '.$val['auteur'].'</center><br><br>';
  echo nl2br($val['texte']); //on écrit l'article avec nl2br() qui met les retours à la ligne
  echo '<br><br><br><center><a href="index.php?p=articles">Retour</a></center><br><br>';

  $val['hit']++; //on prend le nombre de cliques actuel
  $hit = $val['hit']; //on l'augmente (de 1)
  $sql = "UPDATE $table_articles SET hit='$hit' WHERE id='" . $_GET['id'] . "'"; //et on l'insert
  $req = mysql_query($sql) or die('Erreur SQL : '  .mysql_error() . '<br>Requête : ' . $sql);

  mysql_close(); //on ferme la connexion

?>