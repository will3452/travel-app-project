<?php 
     include_once '../../vendor/autoload.php';
     include_once 'process/LoginStatus.php';
     $User = new User;
     $GetBusinessManager = $User->GetBusinessManager();
     $businessname = '';
     $businesslogo = '';  
     $businesstype = '';  
     if($GetBusinessManager){
        $businessname = $GetBusinessManager->name;
        $businesslogo = $GetBusinessManager->logo;
        $businesstype = $GetBusinessManager->type;
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/default.css?v=3">
    <link rel="stylesheet" href="../public/css/user_style.css?v=6">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../public/js/operate.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Manager - Business</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php 
            include '_UI/header_1.php';
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
                    <p class="mt-4 edit-title">Business</p>
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
                    <!--logo content -->
                    <div class="hide-dash">
                        <div class="form-container-user">
                            <div class="rowss image-body">
                                    <?php if($GetBusinessManager): ?>
                                        <img src="../user/assets/logo/<?php echo $businesslogo; ?>" alt="">
                                    <?php else: ?>
                                        <i class="far fa-image" id="iamge-empty"></i>
                                    <?php endif; ?>
                            </div>
                            <form id="submitForm">  
                                <div class="rowss">
                                    <div id="id_div">
                                            <?php if($GetBusinessManager): ?>
                                                <p>Update Business Logo <span style="color:red;">*</span></p>
                                            <?php else: ?>
                                                <p>Add Business Logo <span style="color:red;">*</span></p>
                                            <?php endif; ?>
                                            <p style="color:red;">Note: logo must have dimensions 3500 x 900</p>
                                    </div>
                                    <div id="idcontent">
                                        <?php 
                                            date_default_timezone_set('Asia/Manila');   
                                        ?> 
                                        <input type="hidden" id="token_business_submit" name="token_business_submit" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>"> 
                                        <input type="file" name="logofilename" required id="logofilename" class="focusinput">
                                    </div>
                                    <div id="id_div">
                                            <?php if($GetBusinessManager): ?>
                                                <p>Update Business Name <span style="color:red;">*</span></p>
                                            <?php else: ?>
                                                <p>Add Business Name <span style="color:red;">*</span></p>
                                            <?php endif; ?>
                                    </div>
                                    <div id="idcontent">
                                        <input type="text" name="businessname" required id="businessname" value="<?php echo $businessname; ?>" placeholder="Business Name" class="focusinput">
                                    </div>
                                    <div id="id_div">
                                            <?php if($GetBusinessManager): ?>
                                                <p>Update Business Type <span style="color:red;">*</span></p>
                                            <?php else: ?>
                                                <p>Add Business Type <span style="color:red;">*</span></p>
                                            <?php endif; ?>
                                    </div>
                                    <div id="idcontent">
                                        <input type="text" name="businesstype" required id="businesstype" value="<?php echo $businesstype; ?>" placeholder="Business Name" class="focusinput">
                                    </div>
                                </div>
                                <div class="button-add-emp" id="logo-btn">
                                    <button type="submit" id="buttonss">
                                            <?php if($GetBusinessManager): ?>
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
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/load.js?v=5"></script>
    <script src="js/business.js?v=5"></script>
</body>
</html>