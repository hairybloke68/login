<?php 
//connect mysql to phpmyadmin database
$hostName = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'dblogin';
$linkDB = mysqli_connect($hostName, $user, $pass, $dbName);

if (mysqli_connect_error()) {
    die('There was an error while connecting to the database');
} else {
    echo "Successfully connected to database";
}

?>
