<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset= "UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, intial-scale=1.0">
	 
	 <title>admin page</title>
	 
	 <!--font awesome cdn link-->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	 
	 <!--css file link-->
	 <link rel="stylesheet" href="css/style.css">
	 
	
</head>
<body>
<?php 
   if(isset($_SESSION['userID']))
   {
      if($_SESSION['userID'] === 1)
      {

      }
   }

session_start();

if(isset($_SESSION['userID']))
   {
      if($_SESSION['userID'] === 1)
      {
        



echo "<link rel='stylesheet' href='../IT21286414/css/navbarStyles.css'>
    <div id='toptop'>
      <img src='../IT21284984(Hompage Inside)/image/logo.png'>
      <div class='logobar'>
         <h1>TruHealth Pharmacy</h1>
      </div>
    </div>";


    include "../IT21286414/php/navbar-admin.php";
    ?>
 <div class="main">

   <div class="main-form">

      <form action="add_Item.php" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="Enter product name" name="product_name" class="box">
         <input type="text" placeholder="Enter product price" name="product_price" class="box">
		 <input type="number" placeholder="Enter the quantity" name="product_quantity" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="button" name="add_product" value="add product">
      </form>
    </div>
   
 

<?php
    $select= "SELECT * FROM products";
	$result = $conn->query($select);
?>	



<div class="display-items">
      <table class="display-items-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product price</th>
			<th>Available quantity</th>
            <th>action</th>
         </tr>
         </thead>
         <?php
		  if(isset($_GET['operation'])){

             if($_GET["operation"]==="success")
         		  {
         			 echo "<script>alert('Record added successfully!!')</script>";
         		  }
				}
				
		   while($row = $result->fetch_assoc()){ ?>
		 
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
			<td><?php echo $row['quantity']; ?></td>
            <td>
               
			   <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="button"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_delete.php?delete=<?php echo $row['id']; ?>" class="button"> <i class="fas fa-trash"></i> delete </a>
			  
            </td>
         </tr>
      <?php } 


      }
   }
else
   {
      header('location:../IT21286414/php/login.php');
      exit();

   }
   ?>
      </table>
   </div>
   </div>
</body>
</html>