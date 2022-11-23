<?php
ini_set('display_errors', 1);
require_once "../php/header.php";

if(isset($_POST['changePwdRequest']))
{

	require_once "config.php";
	require_once "functions.inc.php";

	$username = $_SESSION['userUID'];
	$pwd = $_POST['pwd'];
	$newpwd = $_POST['newpwd'];
	$newpwdRepeat = $_POST['newpwdRepeat'];


	
	//compare two passwords
	if(pwdMismatch($newpwd, $newpwdRepeat) !== false)
	{
		header("location:../php/userProfile.php?error=newpwdMismatch");
		exit();
	}


	if(changePwd($conn, $username, $pwd, $newpwd) !== false)
	{
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