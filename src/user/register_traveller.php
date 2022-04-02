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
    <title>Manager Registration</title>
    <link rel="stylesheet" href="../public/css/authentication_style.css?v=5">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
  
    <div class="containter-signup">
        <div class="logo_cont-signup">
        <img src="assets/logo/logo6.jpg" alt="">
        </div>
        <div class="signup-containers">
            <div class="header-container">
                <p id='spamttitle'>
                   Traveller Registration
                </p>
            </div>
            <div class="hrdiv">
                <hr class="hr">
           </div>
           <form class="input-container-signup">
                <div class="signdis">
                    <div class="input-container">
                        <span>Select Profile</span>
                        <input type="file" id="profile_image" name="profile_image" placeholder="Select Profile">
                    </div>
                    <div class="input-container">
                        <input type="text" id="first_name" name="first_name" placeholder="First Names">
                    </div>
                    <div class="input-container">
                        <input type="text" id="middle_name" name="middle_name" placeholder="Middle Names">
                    </div>
                    <div class="input-container">
                        <input type="text" id="last_name" name="last_name" placeholder="Last Names">
                    </div>
                    <div class="input-container">
                        <input type="email" id="email" name="email" placeholder="example@gmail...">
                    </div>
                    <div class="input-container">
                        <input type="number" id="phone" name="phone" placeholder="0999...">
                    </div>
                    <div class="input-container">
                        <input type="password" id="password" name="password" placeholder="******">
                    </div>
                </div>
                <div class="submit-container">
                    <button id="submit">
                        <span id="span">Register</span>
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
                <a href="login">login</a> / <a href="register_manager">Register as Manager</a>
            </div>
        </div>
    </div>
</body>
</html>