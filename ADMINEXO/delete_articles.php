<?php 
session_start();
require_once 'database.php';

if(isset($_SESSION['oumar sy'])AND !empty($_SESSION['oumar sy'])){
    if(isset($_GET['id'])){
        $req =  $bd->query('SELECT * FROM  articles WHERE id=' .$_GET['id']);
        $article = $req->fetch();
        if($article){
            $req =  $bd->query('DELETE  FROM  articles WHERE id=' .$_GET['id']);
            header('location:../index.php'); 
        }else{
            header('location:../index.php'); 
        }
    }
    }else
    {
    header('location:../index.php');
}


?>