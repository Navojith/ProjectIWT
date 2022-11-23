
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
</head>

<body>
  
    <?php 
    include "header.php";
    include "navbar-cart.php";
    require_once "../includes/config.php";
    ?>


     
   

            <?php 
            ini_set('display_errors', 1);
      
            //fetch user data
            if(isset($_SESSION['userUID']))
            {

                 if(isset($_GET['operation']))
                {
                    if($_GET['operation'] === 'successful')
                    {
                        echo "<script>alert('Item added to cart');</script>";
                    }
                    else if ($_GET['operation'] === 'failed')
                    {
                        echo "<script>alert('Item couldn't be added to cart');</script>";
                    }
                }
 
                $sql = "SELECT * FROM products";
 
                $result = $conn -> query($sql);
               
                    if($result -> num_rows > 0)
                    {
                    	echo ("<table border='1'>");


                    	while($row = $result -> fetch_assoc())
                    	{


                    		

	                            $pimg = $row['image'];
	                            $pname = $row['name'];
	                            $pprice = $row['price'];
	                            $location = '../../IT21268908/uploaded_img/';
	                            $value = $row['id'];
	                           
                               $src = $location.$pimg;
	                          echo " 

	                            <div style='height:auto !important;' id='productOutter' class='outter-container'>
	        						<div style='margin-top:0px;' id='productInner' class='inner-container'><center>
	        							<img src='$src' height='100'>
	        							<p>$pname</p>
	        							<p>Rs. $pprice</p>
	        							<form action='cartAdditems.php' method='POST'>
	        								<input style='width:50%;' palceholder='Quantity' type='text' name='qty'><br><br>
	        								<button type='submit' name='addToCart' value='$value'>Add to Cart</button>
	        							</form> </center>
	 								</div>
	 							</div>";


                        }
                    }
                

            }
            else 
            {
                header("location:register.php");
                exit();
            }    
            ?>


           
        </div>
    </div>
</body>

</html>
