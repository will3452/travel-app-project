<?php 
    include_once '../../vendor/autoload.php';
    $Authentication = new Authentication;
    $Authentication->CheckIfLogin();
    if($Authentication->Cookies()){
        $code =  $_COOKIE['travel_guide_email'];
         $emails= base64_decode($code);
             
         $code2 =  $_COOKIE['travel_guide_password'];
         $passwords= base64_decode($code2);
     }else{
         $emails = '';
         $passwords ='';
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/authentication_style.css?v=5">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="containter-login">
        <div class="logo_cont">
            <img src="assets/logo/logo6.jpg" alt="">
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
           <form id="submitForm" class="input-container">
                <?php 
                    date_default_timezone_set('Asia/Manila');   
                ?> 
                <input type="hidden" id="token_authentication_login" name="token_authentication_login" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>"> 
                <div class="email-container">
                    <label for="">Email</label>
                    <input type="email" id="email" name="email" required value="<?php echo $emails; ?>">
                </div>
                <div class="password-container">
                    <label for="">Password</label>
                    <input type="password" id="password" name="password" required value="<?php echo $passwords; ?>">
                </div>
                <input type="checkbox" id="checkbox" name="checkbox"
                <?php if(isset($_COOKIE['travel_guide_email']) && isset($_COOKIE['travel_guide_password'])) {echo "checked";}else{echo "";} ?>> <span>Remember Me</span>
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
                <a href="register_manager">Register as Manager</a> / <a href="registration_traveller">Register as Traveller</a>
            </div>
        </div>
    </div>
    <script src="js/login.js?v=1"></script>
</body>
</html>