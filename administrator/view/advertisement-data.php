<?php
     include_once '../../vendor/autoload.php';

     include_once '../process/LoginStatus.php';

     include_once '../process/id_validation_fetch.php';

     if(!isset($_GET['ads_id'])){

         header("location:../dashboard");

     }

     $Promotion = new Promotion;

     $idmanager = $userdata->manager_id;

     $GetUserData = $User->GetUserData($idmanager, $User::USER_TYPE_MANAGER);

     $packageid = $userdata->package_id;

     $GetPromoData = $Promotion->GetPromoData($packageid);
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
    <title>Admin - Ads</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '../_UI/header_2.php';
            include '../_UI/modal.php';
            echo $deleteallnotif;
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
                    <p class="mt-4 edit-title">Manager POP</p>
                    <a href="../subscription?tab=ads_sub"><button id="backpage_color"><i class="fas fa-arrow-circle-left"></i></button></a>
                    <br>
                    <br>

                    <div class="form-container-user">
                        <div class="header-profile">
                                <div class="circular--landscape2">
                                    <img src="/../images/users/<?php echo $GetUserData->image; ?>" alt="">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>ID</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo sprintf('%06d',$_GET['ads_id']); ?></p>
                                        <input type="hidden" id="ads_id" value="<?php echo $_GET['ads_id'] ?>">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>POP Image</p>
                                </div>
                                <div id="idcontent" class="imgviews">
                                    <img src="/../images/pop/<?php echo $userdata->pop; ?>" alt="">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Adverstisement Image</p>
                                </div>
                                <div id="idcontent" class="imgviews">
                                    <img src="/../images/ads/<?php echo $userdata->image; ?>" alt="">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Status</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo $userdata->status; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Schedule At</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo $userdata->schedule_at; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Package Name</p>
                                </div>
                                <div id="idcontent">
                                        <a href="package-data?pack_id=<?php echo $packageid; ?>"><p><?php echo $GetPromoData->name; ?></p></a>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords($GetUserData->first_name.' '.$GetUserData->middle_name.' '.$GetUserData->last_name);  ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Email</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo ucwords($GetUserData->email); ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Contact</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo $GetUserData->phone; ?></p>
                                </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <br>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/notification_2.js?v=15"></script>
    <script src="../js/global-search_2.js?v=5"></script>
</body>
</html>
