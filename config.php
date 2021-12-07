<?php
	
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'test';

$mysqli =  new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($mysqli->connect_error){
    die("Unable to connect database: " . $mysqli->connect_error);
}
    
?>
