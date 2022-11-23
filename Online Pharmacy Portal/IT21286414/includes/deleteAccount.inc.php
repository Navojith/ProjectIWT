<?php 
ini_set('display_errors', 1);
if(isset($_POST['deleteAccountRequest']))
{
	require_once "../php/header.php"; 
	require_once "functions.inc.php";
	require_once "config.php";

	
	$userUID = $_SESSION['userUID'];
	$userID = $_SESSION['userID'];
	$pwd = $_POST['pwd'];


	deleteAccount($conn, $userUID, $pwd, $userID);

}