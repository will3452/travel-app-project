<?php

    include_once '../vendor/autoload.php';

    $Authentication = new Authentication;

    $User = new User;

    $Authentication->CheckIfLogin();


     $logo = new Logo;

     $Getlogo = $logo->Getlogo();

     $logoimage = '';
     
     if($Getlogo){

        $logoimage = $Getlogo->image;
        
     }

     if(isset($_GET['zzz']) && isset($_GET['ems'])){

        $emails = $_GET['ems'];

        $code = $_GET['zzz'];

        $codedecod= base64_decode($code);

        $decodeemails= base64_decode($emails);
        
        $check = $User->CheckIfForgotCodeConfirm($decodeemails, $codedecod);

        if(!$check){

            header("location:../");

        }else{

            $_SESSION['changepassword']=$decodeemails;
        }

     }else{

        header("location:../");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="/public/css/authentication_style.css?v=5">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="containter-login">
        <div class="logo_cont">
            <img src="/user/assets/logo/<?php echo $logoimage; ?>" alt="">
        </div>
        <div class="login-containers">
            <div class="header-container">
                <p id='spamttitle'>
                    Change Password
                </p>
            </div>
            <div class="hrdiv">
                <hr class="hr">
           </div>
           <form id="submitForm" class="input-container">
                <?php
                    date_default_timezone_set('Asia/Manila');
                ?>
                <input type="hidden" id="token_authentication_changepassword" name="token_authentication_changepassword" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                <div class="email-container">
                    <label for="">Password</label>
                    <input type="password" id="password" name="password" placeholder="New Password" required>
                </div>
                <div class="submit-container">
                    <button id="submit">
                        <span id="span">Confirm</span>
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
                <a href="register_manager">Register as Manager</a> / <a href="register_traveler">Register as Traveler</a>
                <br>
                <br>
                <a href="login">Login</a>
            </div>
            <br>
        </div>
    </div>
    <script src="/user/js/change_password.js?v=5"></script>
</body>
</html>
