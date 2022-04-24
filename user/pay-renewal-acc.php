<?php
     include_once '../vendor/autoload.php';
     $Authentication = new Authentication;
     $Gcash = new Gcash;
     $Authentication->CheckIfLogin();
     $GetGcash = $Gcash->GetGcash();
     $accountname = '-------';
     $accountnum = '-------';
     if($GetGcash){
        $accountname = $GetGcash->name;
        $accountnum = $GetGcash->number;
     }
     $logo = new Logo;
     $Getlogo = $logo->Getlogo();
     $logoimage = '';
     if($Getlogo){
        $logoimage = $Getlogo->image;
     }
     $GetPricing = $Gcash->GetPricing();
     $account_pricing = '';
     $account_details = '';
     if($GetPricing){
        $account_pricing = $GetPricing->account_pricing;
        $account_details = $GetPricing->account_details;
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Payment Renewal Account</title>
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
                    Manager Payment Renewal Account
                </p>
            </div>
            <div class="hrdiv">
                <hr class="hr">
           </div>
           <form id="submitForm" class="input-container-signup">
                    <?php
                        date_default_timezone_set('Asia/Manila');
                    ?>
                    <input type="hidden" id="token_renew_manager" name="token_renew_manager" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                    <div class="input-container" style="width:100%;">
                        <span>Email</span>
                        <input type="email" id="email" name="email" style="width:100%;" required placeholder="Enter Your Registered Email">
                    </div>
                <div class="payment_">
                    <h3>Payment Information</h3>
                    <div class="logo_gcash">
                        <img src="assets/signup/gcashlogo.png" alt="">
                    </div>
                    <div class="rowss">
                            <div id="id_div">
                                <p>Account Name: <span><?php echo ucwords($accountname); ?></span></p>
                                <p>Account Number: <span><?php echo $accountnum; ?></span></p>
                                <p>Account Price: <span>₱<?php echo $account_pricing; ?></span></p>
                                <p>Account Price Details: <span><?php echo $account_details; ?></span></p>
                            </div>
                    </div>
                    <div class="input-container2">
                        <span>Attch Proof of Payment</span>
                        <input type="file" id="pop" name="pop" required placeholder>
                    </div>
                </div>
                <div class="submit-container">
                    <button id="submit">
                        <span id="span">Submit</span>
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
                <a href="login">login</a> / <a href="register_traveler">Register as Traveler</a>
                <br>
                <br>
                <a href="../">Cancel</a>
            </div>
        </div>
    </div>
    <script src="js/payrenewal.js?v=5"></script>
</body>
</html>
