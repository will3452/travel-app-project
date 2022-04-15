<?php
     include_once '../../vendor/autoload.php';
     include_once '../process/LoginStatus.php';
     $Gcash = new Gcash;
     $GetGcash = $Gcash->GetGcash();
     $accountname = '-------';
     $accountnum = '-------';
     if($GetGcash){
        $accountname = $GetGcash->name;
        $accountnum = $GetGcash->number;
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
    <link rel="stylesheet" href="/../public/css/default.css?v=7">
    <link rel="stylesheet" href="/../public/css/user_style.css?v=7">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/../public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <title>Manager - Pay Account Renewal</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '../_UI/header_2.php';
        ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
                include '../_UI/sidebar.php';
                echo $sidebarinside;
            ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <p class="mt-4 edit-title"> Pay Account Renewal</p>
                    <form id="submitForm">
                        <div class="form-container-user">
                            <div class="rowss">
                                <div id="id_div">
                                        <p style="font-size:20px;"> Pay Account Renewal Form</p>
                                </div>
                            </div>
                            <?php
                                date_default_timezone_set('Asia/Manila');
                            ?>
                            <input type="hidden" id="token_payrenewal" name="token_payrenewal" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Payment Information:</p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Gcash Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $accountname; ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Gcash Number</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $accountnum; ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Account Renewal Price</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $account_pricing; ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Account Renewal Details</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $account_details; ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Proof of Payment <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="file" id="pop" name="pop" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Date <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="text" id="date" name="date" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                        </div>
                        <div class="button-add-emp">
                           <a href="../payment-history" id="cancel">Cancel</a>
                            <button type="submit" id="buttonss" name="button">
                                <span id="spansubmit">Pay Renewal</span>
                                <div class="center-loading-2">
                                    <div class="span5load"></div>
                                    <div class="span6load"></div>
                                    <div class="span7load"></div>
                                </div>
                            </button>
                        </div>
                    </form>

                </div>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/pay-account-renewal.js?v=2"></script>
</body>
</html>
