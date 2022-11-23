<?php

$serverName = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'Project IWT';

$conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);

if($conn -> connect_error)
{
	die("Connection Failed : ". $conn -> connect_error);
}

?>