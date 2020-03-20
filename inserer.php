<?php
include('connect.php');
  $sql1 = "SELECT * FROM utilisateurs";
$users = mysqli_query($conn,$sql1);
if ($users) {
 echo "OK";
}else {
 echo "NON";
}
 ?>
<table id="users" class="table table-striped table-bordered" cellspacing="3" width="100%">
  <center>Liste des utilisateurs</center>
  <tr>
    <td> nom </td>
    <td> prenom </td>
    <td>  email </td>
    <td>  sex </td>
    <td>  dat_naiss </td>
  </tr>
  <?php
  // on va scanner tous les tuples un par un
while ($data = mysqli_fetch_array($users)) {
	// on affiche les résultats
  echo "<tr>";
  echo "<td>".$data['nom']."</td>";
  echo "<td>".$data['prenom']."</td>";
  echo "<td>".$data['email']."</td>";
  echo "<td>".$data['sex']."</td>";
    echo "<td>".$data['dat_naiss']."</td>";
  echo "</tr>";
}
   ?>
</table>
