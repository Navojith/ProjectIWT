<?php
ini_set('display_errors', 1);
        include'db.conn.php'; 
        if(isset($_POST['submit']))
        {
            $firstname=$_POST['firstname'];
            $address=$_POST['address']; 
            $Zip_Code=$_POST['Zip_Code'];
            $city=$_POST['city'];
            $NOCname=$_POST['NOCname'];
            $cardnumber=$_POST['cardnumber'];
            $EXPDate=$_POST['EXPDate'];
            $cvv=$_POST['cvv'];
            $payment=$_POST['payment'];
            
 
            
            $sql1 = "INSERT INTO delivery_details(Delivery_name,Payment_type,Delivery_address,Zipcode,Delivery_city) values('$firstname','$payment','$address','$Zip_Code','$city')";
            $result = mysqli_query($conn, $sql1);

            $sql2 = "INSERT INTO card_details(card_NOCname,card_number,card_EXPDate,card_cvv) values('$NOCname','$cardnumber','$EXPDate','$cvv')";
            $result = mysqli_query($conn, $sql2);




            
            header("location:Home_page.php?payment=success");
            
        }
            
    ?>
