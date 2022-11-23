<?php 
ini_set('display_errors', 1);
if(isset($_POST['addToCart']))
{
	$pid = intval($_POST['addToCart']);

	include "header.php";
    require_once "../includes/config.php";
    
    $sql = "SELECT * from products where id = $pid";

    if($pprice = $conn -> query($sql))
    {
    	$qty = floatval($_POST['qty']);
    	
    	$p = $pprice -> fetch_assoc();
	    $sum = ($p['price'] * $qty);
	    $pname = $p['name'];

	    if(isset($_SESSION['total']))
	    {
	    	$tot = intval($_SESSION['total']);
	    }
	    else
	    {
	    	$tot = 0;
	    }

	    $_SESSION['total'] = $tot + $sum; 



	    if(isset($_SESSION['cartCode']))
	    {
	    	$code =$_SESSION['cartCode'];
	    }
	    else
	    {
	    	$code = "";
	    }

	   

	    $_SESSION['cartCode'] = $code."<p>$pname -> $qty = Rs.$sum</p>";

	    header("location:../php/products.php?operation=successful");
	    exit(); 
    }
    else
    {
    	header("location:../php/products.php?operation=failed");
	    exit();
    }
}
else 
{
	header("location:../php/products.php");
	exit();
}

?>