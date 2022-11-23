<?php 
require_once "config.php";
require_once "header.php";
ini_set('display_errors', 1);
	$userID = $_SESSION['userID'];
	$sql = "SELECT * FROM profileImg where userID = $userID";

	$data = $conn -> query($sql);

	if($data -> num_rows > 0)
	{
		$userImageData = $data -> fetch_assoc();
		
		if($userImageData['status'] != 1)
		{
			
			?>
	 		<br><div class='c'><img class='displayPicture' src='../images/displayPicture.png'></div><br><br>
	 	<?php
		}
		else 
		{

			$path = $userImageData['location']."?".mt_rand();
			
			
			echo "<br><div class='c'><img class='displayPicture' src='$path'></div><br><br>";
			
		}
	}



?>