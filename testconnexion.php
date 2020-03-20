<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
     $mavar = mysqli_select_db($conn, 'enregistrement');
		 session_start();
if (isset($_POST['Valider'])) {
   $errors = '';
    // Data sanitization to prevent SQL injection
    $email =  $_POST['email'];
    $password = $_POST['password'];

    // Error message if the input field is left blank
    if (empty($email)) {
        echo'addresse email est obligatoire';
    }
    if (empty($password)) {
        echo 'le mot de passe est obligatoire';
    }

         echo "felicitation1";
				 $query = "SELECT * FROM utilisateurs WHERE email='".$email."' AND password='".$password."'";
				 $results = mysqli_query($mavar, $query);
    // Checking for the errors
    if (count($errors) == 0) {
                 echo "felicitation2";
        // Password matching

        $query = "SELECT * FROM utilisateurs WHERE email='".$email."' AND password='".$password."'";
        $results = mysqli_query($mavar, $query);

							 // If the username and password doesn't match
							 echo 'invalide email ou pot de passe';
        // $results = 1 means that one user with the
        // entered username exists

    }else{
		(mysqli_num_rows($results) == 1) {
							 echo "felicitation3";
				// Storing username in session variable
				$_SESSION['email'] = '$email';

				// Welcome message
				$_SESSION['success'] = "You have logged in!";

				// Page on which the user is sent
				// to after logging in
				header('location:index.php');
		}


		}
	}


?>
