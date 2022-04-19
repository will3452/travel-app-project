<?php
     include_once '../vendor/autoload.php';

     include_once 'process/LoginStatus.php';

     $Branding = new Branding;
     
     $GetSystemTMD = $Branding->GetSystemTMD();

     $termstitle = '';

     $termsdescription = '';

     $conditiontitle = '';

     $conditiondescription = '';

     if($GetSystemTMD){

        $termstitle = $GetSystemTMD->termstitle;

        $termsdescription = $GetSystemTMD->termsdescription;
        
        $conditiontitle = $GetSystemTMD->conditiontitle;

        $conditiondescription = $GetSystemTMD->conditiondescription;

     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/default.css?v=4">
    <link rel="stylesheet" href="/public/css/user_style.css?v=20">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - T&D</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '_UI/header_1.php';
            include '_UI/modal.php';
            echo $deleteallnotif;
        ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
                include '_UI/sidebar.php';
                echo $sidebaroutside;
            ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <p class="mt-4 edit-title">Terms And Conditions</p>
                    <!--loading here !-->
                    <div class="loadingforallcontent">
                        <div class="loading-icon">
                            <div class="center">
                                <div class="span1load"></div>
                                <div class="span2load"></div>
                                <div class="span3load"></div>
                            </div>
                        </div>
                    </div>

                    <!--tmd content -->
                    <div class="hide-dash">
                        <div class="form-container-user">
                            <form id="submittermsandcondition">
                                <?php
                                    date_default_timezone_set('Asia/Manila');
                                ?>
                                <input type="hidden" id="token_tmd" name="token_tmd" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>"> 
                                <div class="rowss">
                                        <div id="id_div">
                                            <p style="font-size:20px;">For Terms</p>
                                        </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                        <p>Title<span style="color:red;">*</span></p>
                                    </div>
                                    <div id="idcontent">
                                            <input type="text" name="titlet" value="<?php echo $termstitle; ?>" required id="titleterms" placeholder="ex: Terms"  class="focusinput">
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                            <p>Description <span style="color:red;">*</span></p>
                                    </div>
                                    <div id="idcontent">
                                        <textarea name="descriptiont" id="description" required placeholder="ex: Terms Description" class="focusinput"><?php echo $termsdescription; ?></textarea>
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                        <p style="font-size:20px;">For Condition</p>
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                        <p>Title<span style="color:red;">*</span></p>
                                    </div>
                                    <div id="idcontent">
                                            <input type="text" name="titlec"  id="titleterms" value="<?php echo $conditiontitle; ?>" required placeholder="ex: Condition"  class="focusinput">
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                            <p>Description <span style="color:red;">*</span></p>
                                    </div>
                                    <div id="idcontent">
                                        <textarea name="descriptionc" id="description" required placeholder="ex: Condition Description" class="focusinput"><?php echo $conditiondescription; ?></textarea>
                                    </div>
                                </div>
                                <div class="button-add-emp" id="logo-btn">
                                    <button type="submit" id="buttonss">
                                            <?php if($GetSystemTMD): ?>
                                                <span id="spansubmit">Update</span>
                                            <?php else: ?>
                                                <span id="spansubmit">Submit</span>
                                            <?php endif; ?>
                                            <div class="center-loading-2">
                                                <div class="span5load"></div>
                                                <div class="span6load"></div>
                                                <div class="span7load"></div>
                                            </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </main>
        </div>
    </div>
    <script src="js/load.js"></script>
    <script src="js/notification.js?v=15"></script>
    <script src="js/termsandcondition.js"></script>
</body>
</html>
