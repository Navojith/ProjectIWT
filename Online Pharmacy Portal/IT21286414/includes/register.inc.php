<?php
ini_set('display_errors', 1);

if(isset($_POST['submit']))
{

	require_once "config.php";
	require_once "functions.inc.php";

	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$pwdRepeat = $_POST['pwdRepeat'];


	//check whether the username or email already registered
	if(userExists($conn, $username, $email) !== false)
	{
		header("location:../php/register.php?error=userExists");
		exit();
	}

	//compare two passwords
	if(pwdMismatch($pwd, $pwdRepeat) !== false)
	{
		header("location:../php/register.php?error=pwdMismatch");
		exit();
	}


	//serverside validation for added security

	//check whether all the fields have values
	if(emptyInput($firstName, $lastName, $username, $email, $pwd, $pwdRepeat) !== false)
	{
		header("location:../php/register.php?error=emptyInput");
		exit();
	}


	//create user account
	createAccount($conn, $firstName, $lastName, $username, $email, $pwd);

	

	if(loginUser($conn, $username, $pwd) !== false)
	{
		$id = $_SESSION['userID'];

		header("location:../php/userProfile.php");

		exit();
	}


	
}
else
{
	//redirect people if they are coming here by directly entering the address in the URL
	header("location:../php/register.php");
	exit();
}

?>