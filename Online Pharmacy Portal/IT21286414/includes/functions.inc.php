<?php
ini_set('display_errors', 1);

//check whether the username or email already registered
function userExists($conn, $username, $email)
{
	$sql = "SELECT * FROM users WHERE username = ? OR email = ?;";

	//prepare statement
	$stmt = $conn -> prepare($sql);
	$stmt -> bind_param("ss", $username, $email);
	$stmt -> execute();

	//get the result
	$resultData = $stmt -> get_result();

	//fetch associate array
	if($row = $resultData -> fetch_assoc())
	{
		return $row;
	} 
	else {
		$result = false;
		return $result;
	}

	$stmt -> close();
}


//compare two passwords
function pwdMismatch($pwd, $pwdRepeat)
{
	if($pwdRepeat !== $pwd)
	{
		return true;
	}
	else
	{
		return false;
	}
}



//check whether all the fields have values
function emptyInput($firstName, $lastName, $username, $email, $pwd, $pwdRepeat)
{
	if(empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat))
	{
		return true;
	}
	else
	{
		return false;
	}
}


//create user account
function createAccount($conn, $firstName, $lastName, $username, $email, $pwd)
{
	$sql = "INSERT INTO users(username, email, password, firstName, lastName) VALUES(?, ?, ?, ?, ?);";

	//prepare statement
	$stmt = $conn -> prepare($sql);

	//hash password
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	//bind parameters
	$stmt -> bind_param("sssss", $username, $email, $hashedPwd, $firstName, $lastName);
	$stmt -> execute();

	$stmt -> close();

	//create default dp
	$sql4 = "SELECT * FROM users where username = ?";

	$stmt2 =  $conn -> prepare($sql4);
	$stmt2 -> bind_param("s", $username);
	$stmt2 -> execute();

	$resultData2 = $stmt2 -> get_result();

	//fetch associate array
	if($row = $resultData2 -> fetch_assoc())
	{
		$id = $row['ID'];
		createInitialDP($conn, $id);
	} 
	

	$stmt2 -> close();
}


function emptyInputLogin($username, $pwd)
{
	if(empty($username) || empty($pwd))
	{
		return true;
	}
	else
	{
		return false;
	}
}


function loginUser($conn, $username, $pwd)
{
	$userExists = userExists($conn, $username, $username);

	

	if($userExists === false)
	{
		header("location:../php/login.php?error=invalidLogin");
		exit();
	}

	//get password from the database
	$hashedPwd = $userExists["password"];

	//compare and verify password
	$checkPwd = password_verify($pwd, $hashedPwd);

	if($checkPwd === false)
	{
		header("location:../php/login.php?error=invalidLogin");
		exit();
	}

	//acctually login the user
	else if($checkPwd === true)
	{

		session_start();
		$_SESSION['userID'] = $userExists['ID'];
		$_SESSION['userUID'] = $userExists['username'];

		//admin page
		if($userExists['ID'] === 1)
		{

			//admin username = admin
			//admin password = Admin123

			header('location:../../IT21268908/admin_page.php');
			exit();
		}
		
	}
}


//update profile
function updateProfile($conn, $email, $fname, $lname, $tpNo, $street, $city, $country, $uid)
{
	
	$sql = "UPDATE users SET email = ?, firstName = ? , lastName = ?, contactNumber = ?, street = ?, city = ?, country = ? WHERE username = '$uid'";

	$stmt1 = $conn -> prepare($sql);
	
	$stmt1 -> bind_param("sssssss", $email, $fname, $lname, $tpNo, $street, $city, $country);

	$stmt1 -> execute();
	$stmt1 -> close();

}

function changePwd($conn, $username, $pwd, $newpwd)
{
	$userExists = userExists($conn, $username, $username);


	if($userExists === false)
	{
		header("location:../php/userProfileEdit.php?error=incorrectUsername");
		exit();
	}

	//get password from the database
	$hashedPwd = $userExists["password"];


	//compare and verify password
	$checkPwd = password_verify($pwd, $hashedPwd);

	if($checkPwd === false)
	{
		header("location:../php/userProfile.php?error=pwdMismatch");
		exit();
	}

	//acctually login the user
	else if($checkPwd === true)
	{
		$hashedPwd = password_hash($newpwd, PASSWORD_DEFAULT);
		$sql = "UPDATE users SET password = ? WHERE username = ? ;";

		$stmt = $conn -> prepare($sql);
		$stmt -> bind_param("ss", $hashedPwd, $username);

		$stmt -> execute();
		$stmt -> close();

		
	}
}


function changeUsername($conn, $username, $pwd, $uid, $id)
{
	$userExists = userExists($conn, $uid, $uid);


	if($userExists === false)
	{
		header("location:../php/userProfileEdit.php?error=incorrectUsername");
		exit();
	}

	//get password from the database
	$hashedPwd = $userExists["password"];


	//compare and verify password
	$checkPwd = password_verify($pwd, $hashedPwd);

	if($checkPwd === false)
	{
		header("location:../php/userProfile.php?error=pwdMismatch");
		exit();
	}

	
	else if($checkPwd === true)
	{
		
		$sql = "UPDATE users SET username = ? WHERE ID = ? ;";
		
		$stmt = $conn -> prepare($sql);
		$stmt -> bind_param("si", $username, $id);

		$stmt -> execute();
		$stmt -> close();

		
	}
}

//set dp status as  0
function createInitialDP($conn, $id) {

	$sql = "INSERT INTO profileImg(userID, status) VALUES($id, 0);";

	$conn -> query($sql);

}

function updateDPStatus($conn, $userID, $path) {

	$sql = "UPDATE profileImg SET status = 1 , location = '$path' where userID = $userID;";

	$conn -> query($sql);


}


function deleteAccount($conn, $username, $pwd, $id)
{


	$userExists = userExists($conn, $username, $username);

	
	if($userExists === false)
	{
		header("location:../php/login.php?error=invalidLogin1");
		exit();
	}
	//get password from the database
	$hashedPwd = $userExists["password"];

	//compare and verify password
	$checkPwd = password_verify($pwd, $hashedPwd);

	if($checkPwd === false)
	{
		header("location:../php/login.php?error=invalidLogin2");
		exit();
	}

	//acctually login the user
	else if($checkPwd === true)
	{
		$sql1 = "DELETE FROM users WHERE ID = $id";
		$sql2 = "DELETE FROM profileImg WHERE userID = $id";

		$conn -> query($sql1);
		$conn -> query($sql2);

		session_destroy();
		header("location:../php/login.php?operation=accountDeleted");
		exit();

	}

}

?>

