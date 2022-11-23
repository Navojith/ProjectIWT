<!DOCTYPE html>
<html>
<head>
    <title>User Profile Edit</title>
    <link rel="stylesheet" href="../css/regFormStyles.css">
    <link rel="stylesheet" href="../css/gridFormat.css">
    <link rel="stylesheet" href="../css/profileStyling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">     
</head>

<body>
  
    <?php 
    include "header.php";
    include "navbar-account.php";
    require_once "../includes/config.php";
    ?>


     <script src="../js/uploadProfileImg.js"></script>
    <div id="profileCardOutter" class="outter-container">
        <div id="profileCardInner" class="inner-container">

           
                  

             

            <?php 
              //error handlers

                    if(isset($_GET["error"]))
                    {
                        if($_GET['error'] == 'incorrectUsername')
                        {
                            echo "<p style='color:red'>Incorrect Username!</p>";
                           
                        }

                        else if($_GET['error'] == 'pwdMismatch')
                        {
                            echo "<p style='color:red'>Passwords Didn’t Match. Try Again.</p>";
                           
                        }

                    }


            //fetch user data
            if(isset($_SESSION['userUID']))
            {


                $currentUser = $_SESSION['userUID'];
 
                $sql = "SELECT * FROM users WHERE username = '$currentUser'";
 
                $result = $conn -> query($sql);
               
                    if($result -> num_rows > 0)
                    {

                        while($row = $result -> fetch_assoc())
                        {
                            
                            ?>


                        <form id="profile" action="../includes/updateProfile.inc.php" method="POST">
                            <div>
                                <?php
                                     require_once "../includes/fetchProfilePicture.inc.php";
                                ?>
                        
                            </div>
                            
                            <script src="../js/uploadProfileImg.js"></script>
                            <h2><center><?php echo $row['username'] ?></center></h2>

                            <!--profile pic-->  
                            <fieldset>
                                <legend>Profile Picture</legend>
                                <div class="uploadDPDiv">
                                <input  id="a1" type="file" name="profileImg">
                                <div id="a2">
                                <button type="submit" onclick="changeDestination()" id="uploadProfileImg" name="upload">Upload</button></div></div>
                             </fieldset>  <br>
                            

                            <lable class="accountDetailsTitle" for="email"><div>Email</div></lable>
                            <input class="accountDetailsInput " id="email" type="email" name="email" value="<?php echo $row['email'] ?>"><br><br>

                            <lable class="accountDetailsTitle" for="fname"><div>First Name</div></lable>
                            <input class="accountDetailsInput " id="fname" type="text" name="fname" value="<?php echo $row['firstName'] ?>"><br><br>

                            <lable class="accountDetailsTitle" for="lname"><div>Last Name</div></lable>
                            <input class="accountDetailsInput" id="lname" type="text" name="lname" value="<?php echo $row['lastName'] ?>"><br><br>

                            <lable class="accountDetailsTitle" for="tpNo"><div>Phone Number</div></lable>
                            <input class="accountDetailsInput" id="tpNo" type="text" name="tpNo" value="<?php echo $row['contactNumber'] ?>"><br><br>
                            
                            <br><br>
                            <fieldset>
                                <legend>Address</legend>
                                <lable class="accountDetailsTitle" for="street"><div>Street</div></lable>
                                <input class="accountDetailsInput" id="street" type="text" name="street" value="<?php echo $row['street'] ?>"><br><br>

                                <lable class="accountDetailsTitle" for="city"><div>City</div></lable>
                                <input class="accountDetailsInput " id="city" type="text" name="city" value="<?php echo $row['city'] ?>"><br><br>

                                <lable class="accountDetailsTitle" for="Country"><div>Country</div></lable>
                                <input class="accountDetailsInput" id="Country" type="text" name="country" value="<?php echo $row['country'] ?>"><br><br>
                            </fieldset>

                            <br>

                            <div onclick="location.href='userProfile.php';" id="cancelSaveChangesbtn"><a href="userProfile.php">Cancel</a></div>
                            <button id="saveChangesbtn" type="submit" name="save">Save changes</button>
                        </form>

                            

                            <fieldset id="advancedOptions">
                                <lable><b>Advanced Options</b></lable><br><br>
                                <button class="advancedOptionsbtn" id="pwdChangeRequestBtn">Change Account Password</button>
                                <button class="advancedOptionsbtn" id="usernameChangeRequestBtn">Change Username</button>
                                <button class="advancedOptionsbtn" id="deleteAccountRequestBtn">Delete Account</button>
                            </fieldset>




                        <?php
                            require_once "profileFooter.php";
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
<script src='../js/pwdChange.js'></script>
<script src="../js/advancedAccountOptions.js"></script>
<script src="../js/changeUsername.js"></script>
</html>
