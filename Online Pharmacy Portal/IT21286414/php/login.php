
<?php 
    include "header.php";
    include "navbar-login.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="../css/gridFormat.css">
    <link rel="stylesheet" href="../css/regFormStyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">     
</head>

<body>

    <div class="outter-container col-large-8">
        <div class="inner-container">
            
            <?php
                $status = $_GET['error'];

                if($status === 'invalidLogin')
                {
                    echo "<p style='color:red;'>Incorrect Username or Password</p>";
                }

            ?>
            <form action="../includes/login.inc.php" method="POST">
                <center><p class="reg-title">Log In</p></center>

                <input type="text" name="username" placeholder="Username or Email Address" required><br>
                <input type="password" name="pwd" placeholder="Password"><br>
                <div class="forgotPassword" required>
                    <a href="forgotPassword.php">Forgot Password?</a>
                </div>
                <input class="submit-btn" type="submit" name="submit" value="Log In">
                <p class="switchBetweenLoginAndRegister">Don't have an account?
                    <a href="register.php">Sign Up</a>
                </p>
            </form> 
        </div>
    </div>
</body>
</html>