<?php
     include_once '../vendor/autoload.php';
     $Authentication = new Authentication;
     $Authentication->CheckIfLogin();
     $logo = new Logo;
     $Getlogo = $logo->Getlogo();
     $logoimage = '';
     if($Getlogo){
        $logoimage = $Getlogo->image;
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveler Registration</title>
    <link rel="stylesheet" href="/public/css/authentication_style.css?v=6">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

    <div class="containter-signup">
        <div class="logo_cont-signup">
        <img src="assets/logo/<?php echo $logoimage; ?>" alt="">
        </div>
        <div class="signup-containers">
            <div class="header-container">
                <p id='spamttitle'>
                   Traveler Registration
                </p>
            </div>
            <div class="hrdiv">
                <hr class="hr">
           </div>
           <form id="submitForm" class="input-container-signup">
                <?php
                    date_default_timezone_set('Asia/Manila');
                ?>
                <input type="hidden" id="token_register_traveler" name="token_register_traveler" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                <div class="input-container2" style="margin-bottom:-9px">
                        <span>Select Profile</span>
                        <input type="file" id="profile_image" required name="profile_image" placeholder="Select Profile">
                </div>
                <div class="signdis">
                    <div class="input-container">
                        <span>First Name</span>
                        <input type="text" id="first_name" required name="first_name" placeholder="First Names">
                    </div>
                    <div class="input-container">
                        <span>Middle Name</span>
                        <input type="text" id="middle_name" required name="middle_name" placeholder="Middle Names">
                    </div>
                    <div class="input-container">
                        <span>Last Name</span>
                        <input type="text" id="last_name" required name="last_name" placeholder="Last Names">
                    </div>
                    <div class="input-container">
                        <span>Email</span>
                        <input type="email" id="email" required name="email" placeholder="example@gmail...">
                    </div>
                    <div class="input-container">
                        <span>Phone Number</span>
                        <input type="number" id="phone" required name="phone" placeholder="0999...">
                    </div>
                    <div class="input-container">
                        <span>Password</span>
                        <input type="password" id="password" required name="password" placeholder="******">
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
                <br>
                <br>
                <a href="../">Cancel</a>
            </div>
        </div>
    </div>
    <script src="js/register_traveler.js?v=1"></script>
</body>
</html>
