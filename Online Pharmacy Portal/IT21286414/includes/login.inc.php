<?php


if(isset($_POST["submit"]))
{

	$username = $_POST['username'];

	$pwd = $_POST['pwd'];

	require_once "config.php";
	require_once "functions.inc.php";


	//check for empty input fields
	if(emptyInputLogin($username, $pwd) !== false)
	{
		header("location:../php/userProfile.php");
		exit();
	}


	//login user
	if(loginUser($conn, $username, $pwd) !== false)
	{
		header("location:../php/userProfile.php");
		exit();
	}

}
else
{
	header("location:../php/login.php");
	exit();
}

?>