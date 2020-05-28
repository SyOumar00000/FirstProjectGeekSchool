<?php
      $host = 'localhost';
      $dbname = 'basededonnee';
      $username = 'root';
      $password = '';
        
      $dsn = "mysql:host=$host;dbname=$dbname"; 
      // récupérer tous les utilisateurs
      $sql = "SELECT * FROM users ORDER BY id ASC";
       
      try{
       $pdo = new PDO($dsn, $username, $password);
       $stmt = $pdo->query($sql);
       
       if($stmt === false){
        die("Erreur");
       }
       
      }catch (PDOException $e){
        echo $e->getMessage();
      }
    ?>
    <!-- <!DOCTYPE html>
    <html>
    <head>
    <title>listes de tout les utilisateurs</title>
    </head>
    <body> -->
    <?php include_once 'entete.php'; ?>
    <center>
     <h1>Liste des utilisateurs</h1>
     <table>
       <thead>
         <tr>
           <th>ID &nbsp; &nbsp; &nbsp;</th>
           <th>Name &nbsp; &nbsp; &nbsp;</th>
           <th>MOT DE PASSE &nbsp; &nbsp; &nbsp;</th>
           <th>ADRESSE EMAIL &nbsp; &nbsp; &nbsp;</th>
           <th>AVATAR</th>
         </tr>
       </thead>
       <tbody>
         <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
         <tr>
           <td><?php echo htmlspecialchars($row['id']); ?> &nbsp; &nbsp; &nbsp;</td> 
           <td><?php echo htmlspecialchars($row['username']); ?>&nbsp; &nbsp; &nbsp;</td>
           <td><?php echo htmlspecialchars($row['password']); ?>&nbsp; &nbsp; &nbsp;</td>
           <td><?php echo htmlspecialchars($row['email']); ?>&nbsp; &nbsp; &nbsp;</td>
           <td><?php echo htmlspecialchars($row['avatar']); ?></td>
         </tr>
         <?php endwhile; ?>
       </tbody>
     </table>
     </center>
     <?php include_once 'footer.php'; ?>
  