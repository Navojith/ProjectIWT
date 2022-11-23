<?php
ini_set('display_errors', 1);
echo "<!--change pwd-->
<div class='overlay' id='changePwd'>
    <div id='profileCardOutter' class='outter-container'>
        <div id='profileCardInner' class='inner-container'>
            <form action='../includes/changePwd.inc.php' method='POST'>
            <h1>Change Password</h1>
             <lable class='accountDetailsTitle' for='pwd'><div>Current Password</div></lable>
            <input class='accountDetailsInput ' id='pwd' type='password' name='pwd'><br><br>
            <lable  class='accountDetailsTitle' for='newpwd' ><div>New Password</div></lable>
            ";?>

            <input   class='accountDetailsInput ' id='newpwd' type='password' name='newpwd' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' required><br><br>
                <div id='pwdValidation2'>
                        <h4 style="color:rgb(27, 109, 250);">Password must contain: </h4>
                        <p id='lowercase2'>A lowercase letter</p>
                        <p id='uppercase2'>An uppercase letter</p>
                        <p id='number2'>A number</p>
                        <p id='letterCount2'>Minimum 8 characters</p>
                    </div>

                <?php 
                echo "
            <lable class='accountDetailsTitle' for='newpwdRepeat'><div>Confirm New Password</div></lable>
            <input class='accountDetailsInput ' id='newpwdRepeat' type='password' name='newpwdRepeat'><br><br>
            <button id='closeOverlay' class='closeOverlay advancedOptionsOverlayBtn disabled' type='button'>Cancel</button>
            <button type='submit' class='saveOverlay advancedOptionsOverlayBtn'
            name='changePwdRequest'>Confirm</button>
            </form>

            

        </div>
    </div>
</div>


<div class='overlay' id='deleteAccount'>
    <div id='profileCardOutter' class='outter-container'>
        <div id='profileCardInner' class='inner-container'>
            <form action='../includes/deleteAccount.inc.php' method='POST'>
            <h1>Delete your Account?</h1>
             <lable class='accountDetailsTitle' for='pwd2'><div>Enter your Password</div></lable>
            <input class='accountDetailsInput ' id='pwd2' type='password' name='pwd' required><br><br>
            <button id='closeOverlay2' class='closeOverlay advancedOptionsOverlayBtn' type='button'>Cancel</button>
            <button type='submit' class='saveOverlay advancedOptionsOverlayBtn'
            name='deleteAccountRequest'>Delete Account</button>
            </form>
        </div>
    </div>
</div>



<div class='overlay' id='changeUsername'>
    <div id='profileCardOutter' class='outter-container'>
        <div id='profileCardInner' class='inner-container'>
            <form action='../includes/changeUsername.inc.php' method='POST'>
            <h1>Change Username</h1>
            <lable class='accountDetailsTitle' for='username'><div>New Username</div></lable>
            <input class='accountDetailsInput ' id='username' type='text' name='username'><br><br>
             <lable class='accountDetailsTitle' for='pwd3'><div>Enter your Password</div></lable>
            <input class='accountDetailsInput ' id='pwd3' type='password' name='pwd'><br><br>
            <button id='closeOverlay3' class='closeOverlay advancedOptionsOverlayBtn' type='button'>Cancel</button>
            <button type='submit' class='saveOverlay advancedOptionsOverlayBtn' name='changeUsernameRequest'>Confirm</button>
            </form>
        </div>
    </div>
</div>"

?> 
