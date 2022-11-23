<?php

// create connection
$conn = new mysqli('localhost','root','','Project IWT');

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>


