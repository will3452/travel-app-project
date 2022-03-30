<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/authentication_style.css?v=2">
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
           <form class="input-container">
                <?php 
                    date_default_timezone_set('Asia/Manila');   
                ?> 
                <input type="hidden" id="authentication" name="authentication" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>"> 
                <div class="email-container">
                    <label for="">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="password-container">
                    <label for="">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <input type="checkbox" id="checkbox" name="checkbox"> <span>Remember Me</span>
                <div class="submit-container">
                    <button id="submit">
                        <span id="span">Login</span>
                        <div class="center-loading">
                            <div class="span1load"></div>
                            <div class="span2load"></div>
                            <div class="span3load"></div>
                        </div>
                    </button>
                </div>
            </form>
            <div class="sign_up">
                <p>or</p>
                <a href="#">Register</a>
            </div>
        </div>
    </div>
</body>
</html>