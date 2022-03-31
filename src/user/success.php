<?php 
     include_once '../../vendor/autoload.php';
     $Authentication = new Authentication;
     $Authentication->CheckIfLogin();
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/authentication_style.css?v=3">
</head>
<body>
  
    <div class="containter-login">
        <div class="logo_cont">
            <img src="assets/logo/samp.png" alt="">
        </div>
        <div class="login-containers">
            <div class="header-container">
                <p id='spamttitle'>
                    Welcome Back!
                </p>
            </div>
            <div class="hrdiv">
                <hr class="hr">
           </div>
           <div class="input-container">
            <div class="success-message-content">
                            <h1>Success</h1>
                            <p>System will verify your account, wait for Confirmation in to your email account!</p>
                            <span>thanks for cooperation </span>
                            <br>
                            <span>- Travel Guide for Cebu Province</span>
                        
                </div>
                <div class="submit-container">
                   <a href="../">
                        <button id="submit">
                                <span id="span">Back</span>
                        </button>
                   </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>