<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
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
    if(isset($_SESSION['userID']))
    {
        if($_SESSION['userID'] === 1)
        {
            require_once "navbar-admin2.php";
        }
        else
        {
             include "navbar-account.php";
        }
    }
   
    ?>

    <div id="profileCardOutter" class="outter-container">
        <div id="profileCardInner" class="inner-container">

            <div>

            <?php
                ini_set('display_errors', 1);
                require_once "../includes/config.php";
                require_once "header.php";

                

                if(isset($_GET['operation']))
                {
                    if($_GET['operation'] === 'successful')
                    {
                        echo "Profile Updated";
                    }
                    else if ($_GET['operation'] === 'failed')
                    {
                        echo "Profile couldn't be Updated";
                    }
                }

                if(isset($_GET['error']))
                {
                    if($_GET['error'] === 'newpwdMismatch')
                    {
                        echo "New Password Mismatch";
                    }
                    else if($_GET['error'] === 'incorrectUsername')
                    {
                        echo "Account unaffected. Please Sign out and Log back in: Server couldn't find the current user";
                    }
                    else if($_GET['error'] === 'pwdMismatch')
                    {
                        echo "incorrect Password. Try Again";
                    }
                }

                require_once "../includes/fetchProfilePicture.inc.php";
               
            ?>
            </div>
            <div class="profileWelcome">
            <h1 id="welcomeToProfileMsg">Hello </h1>
                <?php  


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

                                    <h1 id="profileFName" type="text" name="fname" > <?php echo $row['firstName'] ?></h1>
                                    <br><br>

                                    <h1>Welcome to TruHealth Pharmacy</h1>
                                    <h3 style="color:rgb(27, 109, 250);">~We care about your Health~</h3>

            </div>
                                    <?php
                                }
                            }
                     

                    }
                    else 
                    {
                        header("location:register.php");
                        exit();
                    }   

                    ?>
                        <fieldset id="advancedOptions">
                <lable><b>Advanced Options</b></lable><br><br>
                <button class="advancedOptionsbtn" id="pwdChangeRequestBtn">Change Account Password</button>
                <div onclick="location.href='userProfileEdit.php';" id="editAccountBtnDiv"class="advancedOptionsbtn"><a id="editAccountBtn" href="userProfileEdit.php">Edit Account</a></div>
                <button class="advancedOptionsbtn" id="deleteAccountRequestBtn">Delete Account</button>
            </fieldset>
            
            <?php 
                require_once "profileFooter.php";
            ?>

        </div>
    </div>
</body>
<script src='../js/pwdChange.js'></script>
<script src="../js/advancedAccountOptions.js"></script>
</html>
     
            

