<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online-phrmachy-payment</title>
    <link rel="stylesheet" href="../styles/Payment.css">
</head>
<body>

<?php 
session_start();
if(isset($_SESSION['userUID']))
{
	include "../../IT21286414/php/header.php";
	include "../../IT21286414/php/navbar-userMain.php";

?>
<div id="box">
    <div class="payment-from-style">
    <form  method="POST"  action="payment1.php">


            <table>
                <h3>Dilevery details</h3>
				<tr>
				<td><label> Name</label></td>
				<td><input type= "text" name = "firstname" size="60" placeholder = "Enter-your-name"> <br></td>
				</tr>
				
				 <tr>
				<td><label>Dilevery Address </label></td>
				<td><input type= "text" name = "address" size = "60" placeholder="Enter-your address">  <br></td>
				</tr>
				
                <tr>
                <td><label>ZIP Code </label></td>
                <td><input type= "text" name = "Zip_Code" size = "60" placeholder="Enter-your ZIP code">  <br></td>
                </tr>
				
				 <tr>
				 <td><label>City</label></td>
				<td><input type= "text" name = "city" size = "60" placeholder="Enter city">  <br></td>
				
		 		</tr>
		
			</table>

			<table>
				 <tr>

				 <tr>
				   <td><input type="radio"  id="COD" name="payment" value="cod"></td>
				    <td><label for="COD">Cash On Delivery</label><br></td><br>
				 </tr>
				 
				  
				 <tr>
				   <td><input type="radio" id="cash" name="payment" value="cash"></td><br>
				    <td><label for="cash">Card Payment</label><br></td>
				 </tr>
				 
				 
			</table>
				
				
				   <h3>Card Details</h3>
				   
				   
			<table>
					<tr>
						<td><label>Name On Card</label></td>
						<td><input type= "text" name = "NOCname" size="60" placeholder= "Name on card"> <br></td>
						 </tr>
						
						 <tr>
						<td><label>Credit Card Number</label></td>
						<td><input type= "text" name = "cardnumber" size="60" placeholder  = "Card Number">  <br></td>
						</tr>

						  <tr>
						<td><label>EXP Date </label></td>
						<td><input type= "text" name = "EXPDate" size = "60" placeholder="EXP Date MM/YY" >  <br></td> 
						</tr>
						
						 
 						
						<tr>
						 <td><label>CVV</label></td>
						<td><input type= "text" name = "cvv" size = "60" placeholder="CVV">  <br></td> 
						
				 </tr>
				
				<div class="Submit-button">
				<tr>
			   <td><br><br><button type="submit" name="submit" value = "submit">Pay</button></td></tr></div>

			</table>
    </form>
</div>
</div>
<?php
       }
       else
       {
       		header("location:../../IT21286414/php/login.php");
       		exit();
       }
       
?>
</body>
</html>