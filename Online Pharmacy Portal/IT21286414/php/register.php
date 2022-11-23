<?php 
    include "header.php";
    include "navbar-register.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../css/gridFormat.css">
    <link rel="stylesheet" href="../css/regFormStyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">     
</head>

<body>
    <div class="outter-container col-large-8">
        <div class="inner-container">
            <form action="../includes/register.inc.php" method="POST">
                <p class="reg-title">Sign Up with Email</P>
                <input type="text" name="fname" placeholder="First Name" required><br>
                <input type="text" name="lname" placeholder="Last Name" required><br>
                <input type="username" name="username" placeholder="Username" required><br>
                <input type="email" name="email" placeholder="Email" required><br>

                
                <div class="pwd">
                    <input id="pwdInput" type="password" name="pwd"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
                    <div id="pwdValidation" class="pwdValidation">
                        <p id="lowercase">A lowercase letter</p>
                        <p id="uppercase">An uppercase letter</p>
                        <p id="number">A number</p>
                        <p id="letterCount">Minimum 8 characters</p>
                    </div>
                </div>

                <input id='pwdRepeat' type="Password" name="pwdRepeat" placeholder="Confirm Password" required><br>
                <input id="submit-btn" class="submit-btn disabled" type="submit" name="submit" value="Sign Up">
                <p class="switchBetweenLoginAndRegister">Already have an account?<a href="login.php">Log In</a></p>


                <?php
                    //error handlers

                    if(isset($_GET["error"]))
                    {
                        if($_GET['error'] == 'userExists')
                        {
                            echo "<p style='color:red'>Username Or Email Already Exists in the Database.</p>";
                           
                        }

                        else if($_GET['error'] == 'pwdMismatch')
                        {
                            echo "<p style='color:red'>Passwords Didn’t Match. Try Again.</p>";
                           
                        }

                        else if($_GET['error'] == 'emptyInput')
                        {
                            echo "<p style='color:red'>Please Fill All the Details.</p>";
                           
                        }
                    }


                ?>
            </form> 


        </div>
    </div>

    <script src="../js/registerPasswordValidation.js"></script>
</body>
</html>