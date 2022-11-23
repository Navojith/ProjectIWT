<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/gridFormat.css">
    <link rel="stylesheet" href="../css/regFormStyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">     
</head>

<body>
    <?php 
    include "header.php";
    include "navbar-login.php";
    ?>

   <center>
        <div class="inner-container">
            <h2 style="color:red">This feature is currently Unavailable. Sorry for the inconvenience</h2>
        </div>
    </center>

    
    <div class="outter-container col-large-8">
        <div class="inner-container">
            <form action="#" method="POST">
                <center><p class="reg-title">Reset your password</p></center>
                <p>We'll email you instructions to reset the password.</p><br>
                <input type="email" name="email" placeholder="Email"><br>
                <input class="submit-btn" type="submit" name="submit" value="Request Password Reset">
                <div class="backToLogin">
                    <a href="login.php">Back to Log In</a>
                </div>
            </form> 
        </div>
    </div>
</body>
</html>