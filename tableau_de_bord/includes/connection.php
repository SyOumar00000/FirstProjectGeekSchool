<?php

 $conn = mysqli_connect("localhost","root","", "basededonnee") or
 die('Could not connect to the database!');


mysqli_select_db($conn, "basededonnee") or
 die('No database selected!');
?>