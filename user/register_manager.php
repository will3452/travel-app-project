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
    <title>Manager Registration</title>
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
                  Manager Registration
                </p>
            </div>
            <div class="hrdiv">
                <hr class="hr">
           </div>
           <form id="submitForm" class="input-container-signup">
                <div class="signdis">
                    <?php
                        date_default_timezone_set('Asia/Manila');
                    ?>
                    <input type="hidden" id="token_register_manager" name="token_register_manager" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                    <div class="input-container">
                        <span>Select Profile</span>
                        <input type="file" id="profile_image" name="profile_image" required placeholder="Select Profile">
                    </div>
                    <div class="input-container">
                        <span>First Name</span>
                        <input type="text" id="first_name" name="first_name" required placeholder="First Names">
                    </div>
                    <div class="input-container">
                        <span>Middle Name</span>
                        <input type="text" id="middle_name" name="middle_name" required placeholder="Middle Names">
                    </div>
                    <div class="input-container">
                        <span>Last Name</span>
                        <input type="text" id="last_name" name="last_name" required placeholder="Last Names">
                    </div>
                    <div class="input-container">
                        <span>Email</span>
                        <input type="email" id="email" name="email" required placeholder="example@gmail...">
                    </div>
                    <div class="input-container">
                        <span>Phone Number</span>
                        <input type="number" id="phone" name="phone" required placeholder="0999...">
                    </div>
                    <div class="input-container">
                        <span>Password</span>
                        <input type="password" id="password" name="password" required placeholder="******">
                    </div>
                    <div class="input-container">
                        <span>Manage Type</span>
                        <select name="manager_type" id="manager_type" required>
                            <option>Manager Type</option>
                            <option value="Resort manager">Resort manager</option>
                            <option value="Bed and breakfast manager">Bed and breakfast manager</option>
                            <option value="Rental vehicle manager">Rental vehicle manager</option>
                            <option value="tourist attraction manager">tourist attraction manager</option>
                            <option value="Resto and cafe manager">Resto and cafe manager</option>
                        </select>
                    </div>
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
                <a href="login">login</a> / <a href="register_traveler">Register as Traveler</a>
                <br>
                <br>
                <a href="../">Cancel</a>
            </div>
        </div>
    </div>
    <script src="js/register_manager.js?v=4"></script>
</body>
</html>
