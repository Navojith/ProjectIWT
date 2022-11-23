<?php 
require_once "../php/header.php";
ini_set('display_errors', 1);

if(isset($_POST['save']))
{

	$uid = $_SESSION['userUID'];
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$tpNo = $_POST['tpNo'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$country = $_POST['country'];

	require_once "config.php";
	require_once "functions.inc.php";

	updateProfile($conn, $email, $fname, $lname, $tpNo, $street, $city, $country, $uid);

	header("location:../php/userProfile.php?operation=successful");
	exit();
}
else
{

	header("location:../php/login.php");
	exit();
}
?>