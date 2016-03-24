<?php
include('inc/db_connection.php');
session_start();

$query = $PDO->prepare("SELECT username, password FROM user WHERE username=:username AND password=:password"); //create a prepared statement for our sql query for said user/password combination
$query->bindParam(':username', $_POST['username'], PDO::PARAM_STR);  // Here is where we bind parameters, and sanitize user input to prevent any possible sql injection
$query->bindParam(':password', $_POST['password'], PDO::PARAM_STR);  //
$query->execute(header('Location:../thankyou.php?username='.$_POST['username']));


?>
