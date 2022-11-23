<?php 
	session_start();
	$_SESSION['cartCode'] = '';
	$_SESSION['total'] = 0;
	header("location:cart.php");
	exit();
?>