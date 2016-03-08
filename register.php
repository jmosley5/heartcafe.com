<?php
//remove before flight
ini_set('display_errors', 'On');

$dsn = 'mysqli:unix_socket=/tmp/mysql.sock;dbname=heartcafe.com');
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$dbh = new PDO($dsn, $username, $password, $options);
var_dump($dbh);

?>

<form action="register.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your username: <input type="text" name="name" /></p>
 <p>Your email: <input type="text" name="email" /></p>
 <p>Your password: <input type="text" name="password" /></p>
 <p><input type="submit" name="submit" value="Submit me!" /></p>
</form>
