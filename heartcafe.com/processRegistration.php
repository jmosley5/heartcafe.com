<?php
include('inc/db_connection.php');
session_start();


// this is what stores the data into the database
$stmt = $PDO->prepare("INSERT INTO user (name, username, email, password) VALUES (:name, :username, :email, :password)");
//these are your parameters
$stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);

if($stmt->execute()) { //redirect to thank you page
  header('Location:../thankyou.php?username='.$_POST['username']);
}



?>
