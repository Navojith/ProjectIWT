<?php

require 'config.php';

if(isset($_POST['add_product']))
 {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_quantity = $_POST['product_quantity'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

      if(empty($product_name) || empty($product_price) || empty($product_quantity) || empty($product_image) )
        {
          echo "<script> alert ('Please fill out all!!!!')</script>";
		  exit();
        }
	  else
	    {
          $insert = "INSERT INTO products(name, price, quantity, image) VALUES('$product_name', '$product_price','$product_quantity','$product_image')";
       
             if($conn-> query ($insert))
			 {
                 move_uploaded_file($product_image_tmp_name, $product_image_folder);
                 header("location:admin_page.php?operation=success");
				 exit();
		
             }
			 else{
       
				 header("location:admin_page.php?operation=fail");
				 exit();
                 }
        }
	 
  };
  
  
  

?>