<?php 
ini_set('display_errors', 1);
require_once "../php/header.php";

if(isset($_POST['upload']))
{
	$file = $_FILES['profileImg'];

	$userID = $_SESSION['userID'];
	$fileName = $file['name'];
	$filePath = $file['full_path'];
	$fileType = $file['type'];
	$fileSize = $file['size'];
	$fileTempName = $file['tmp_name'];
	$fileError = $file['error'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg', 'png');

	if(in_array($fileActualExt, $allowed))
	{
		if($fileError === 0 )
		{
			if($fileSize <  10000000)
			{
				require_once "config.php";
				require_once "functions.inc.php";
		
				$fileNameNew = $userID.".".$fileActualExt;
				$fileDestination = '../uploads/profileImg/'.$fileNameNew;
				


				move_uploaded_file($fileTempName, $fileDestination);
				updateDPStatus($conn, $userID, $fileDestination);
				header("location:../php/userProfileEdit.php");
				exit();
				
			}
			else
			{
				echo "File is too big";
			}
		}
		else
		{
			echo "Error uploading the File";
		}
	} else {
		echo "You can't upload files of this type";
	}
}



?>