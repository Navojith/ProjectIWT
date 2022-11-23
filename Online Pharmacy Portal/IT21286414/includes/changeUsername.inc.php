<?php
ini_set('display_errors', 1);
require_once "../php/header.php";

if(isset($_POST['changeUsernameRequest']))
{

	require_once "config.php";
	require_once "functions.inc.php";

	$uid = $_SESSION['userUID'];
	$id = $_SESSION['userID'];
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];



	if(changeUsername($conn, $username, $pwd, $uid, $id) !== false)
	{
		session_destroy(); //destroy current session
		loginUser($conn, $username, $pwd);  // log in with updated username
		
		header("location:../php/userProfile.php?operation=successful");
		exit();
	}
	else
	{
		header("location:../php/userProfile.php?operation=failed");
		exit();
	}

	

}
else {
	header("location:../php/userProfileEdit.php?");
	exit();
}