<?php

    include "header.php";
    include "navbar-cart.php";
    require_once "../includes/config.php";
    
if(isset($_SESSION['userID']))
{


	ini_set('display_errors', 1);
	if(isset($_SESSION['cartCode']))
	{
		$cart = $_SESSION['cartCode'];

	?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile Edit</title>
    <link rel="stylesheet" href="../css/regFormStyles.css">
    <link rel="stylesheet" href="../css/gridFormat.css">
    <link rel="stylesheet" href="../css/profileStyling.css">
    <link rel="stylesheet" href="../css/cartStyling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <style>
    	
    </style>     
</head>

<body>
  


<div class='outter-container'>
	<div class='inner-container'>
		<h1>Shopping Cart</h1>
			<hr>
			<?php 
				echo $_SESSION['cartCode']; 
			?> 
			<hr>
			<p style='color:green'>Total Amount = Rs. 
			<?php 
				echo $_SESSION['total'];
			?>
				
			</p>
			<br><br>
			<button class='cartPayNow' onclick="location.href='../../IT21284984(Hompage Inside)/php/payment.php';" type='button' id='saveChangesbtn'>Pay Now</button>
			<button onclick="location.href='cartReset.php';" type='button' id='cancelsaveChangesbtn'>Reset</button>
			</div>
	</div>

	<?php

	}else
	{
		echo "<div class='outter-container'>
		<div class='inner-container'>
			<h1>Shopping Cart</h1>
				<hr>";
		echo "No items </div></div>";
	}
}	
else
{
	 header("location:login.php");
     exit();
}

?>
</body>

</html>


	
