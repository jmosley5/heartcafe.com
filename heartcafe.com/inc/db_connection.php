<?php

//remove before flight
ini_set('display_errors', 'On');

//this is your database
$dsn = 'mysql:host-localhost;port=8889;dbname=heartcafe';
$username = 'root';
$password = 'root';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);


//this reveals where the errors are
try {
      $PDO = new PDO( $dsn, $username, $password, $options); // PDO Driver DSN. Throws A PDOException.
  }catch( PDOException $Exception ) {

    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );

}
