<?php 
 function getarticles($bd, $nb = null, $id = null){
     if($nb AND !$id){
         $req =  $bd->query('SELECT * FROM articles LIMIT'.$nb);
         $article = $req->fetchAll();
     }
     elseif($id){
        $req =  $bd->query('SELECT * FROM articles WHERE id='.$id);
        $article = $req->fetchObject(); 
     }
     else
     {
        $req =  $bd->query('SELECT * FROM articles');
        $article = $req->fetchAll();
     }
     return $article;

 }

 function getusers($bd, $nb = null, $id = null){
    if($nb AND !$id){
        $req1 =  $bd->query('SELECT * FROM users LIMIT'.$nb);
        $user = $req1->fetchAll();
    }
    elseif($id){
       $req1 =  $bd->query('SELECT * FROM users WHERE id='.$id);
       $user = $req1->fetchObject(); 
    }
    else
    {
       $req1 =  $bd->query('SELECT * FROM users');
       $user = $req1->fetchAll();
    }
    return $user;

}

?>