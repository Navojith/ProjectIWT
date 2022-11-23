<?php

require 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_product']))
 {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_quantity = $_POST['product_quantity'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

      if(empty($product_name) || empty($product_price) || empty($product_image) )
        {
          echo "<script> alert ('Please fill out all!!!!')</script>";
        }
	  else
	    {
          $update = "UPDATE products SET name='$product_name', price='$product_price', quantity='$product_quantity', image='$product_image'
		  WHERE id= $id ";
       
             if($conn-> query ($update))
			 {
                 move_uploaded_file($product_image_tmp_name, $product_image_folder);
                 echo "<script>alert('Record updated successfully!!')</script>";
             }
			 else{
                 echo "<script>alert('Could not able to execute the query!!')</script>";
                 }
        }
	  
  };


?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset= "UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, intial-scale=1.0">
	 
	 <title>admin update</title>
	 
	 <!--font awesome cdn link-->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	 
	 <!--custom css file link-->
	 <link rel="stylesheet" href="css/style.css">
	 
</head>

<body>

 <div class="main">

   <div class="main-form centered">
        
		<?php
		    $select= "SELECT * FROM products WHERE id=$id";
	        $result = $conn->query($select);
			while($row = $result->fetch_assoc()){
		?>
		
      <form action="" method="post" enctype="multipart/form-data">
          <h3 class="title">update the product</h3>
          <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the product name">
          <input type="text" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>" placeholder="enter the product price">
		  <input type="text" class="box" name="product_quantity" value="<?php echo $row['quantity']; ?>" placeholder="enter the product quantity">
          <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
          <input type="submit" value="update product" name="update_product" class="button">
          <a href="admin_page.php" class="button">Back</a>
      </form> 
	  
	  <?php };?>
	  
    </div>
</div>
	
</body>
</html>